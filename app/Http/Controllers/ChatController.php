<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Message;
use App\Models\Seller;

class ChatController extends Controller
{
    public function index($id)
    {
        $authUser = auth()->guard('customer')->user();
        if(!$authUser){
            $authUser = auth()->guard('seller')->user();
        }
        $chatTo = Seller::find($id);
        if(!$chatTo){
            $chatTo = Customer::find($id);
        }
        $chatArray = $this->getChatList($authUser->id, (int)$id);
        $chatedWith = $chatArray['chatList'];
        $chatList = collect();
        foreach($chatedWith as $key=>$user){
            $messages = $this->message($authUser->id, $user);
            $chatList->push($messages->first());
        }
        $newChat = null;
        $others = null;
        if(!$chatArray['oldUser']){
            $newChat = new Message([
                "user_id" => $authUser->id,
                "receiver_id" => $chatTo->id,
                "receiver_id" => $chatTo->id,
                "msg" => null,
                "message_type" => 0,
                "created_at" => now(),
                "user2" => null,
                "receiver2" => null,
            ]);
            $newChat->user1()->associate($authUser);
            $newChat->receiver1()->associate($chatTo);
            $chatList = $chatList->push($newChat);
        }
        $chatList = $chatList->sortByDesc('created_at')->values();
        if(auth()->guard('seller')->check()){
            return view('seller.chat', compact('chatList', 'authUser'));
        }
        else{
            return view('customer.chat', compact('chatList', 'chatTo', 'authUser'));
        }
    }

    private function getChatList($authId, $id){
        $receivers = Message::orderBy('id', 'desc')->where('user_id', $authId )->pluck('receiver_id')->toArray();
        $senders = Message::orderBy('id', 'desc')->where('receiver_id', $authId )->pluck('user_id')->toArray();
        $chatList = array_unique(array_merge($receivers, $senders));
        $oldUser = in_array($id, $chatList);
        return [
            'chatList' => $chatList,
            'oldUser' => $oldUser,
        ];
    }

    private function message($a, $b){
        return Message::where(function ($query) use ($a, $b) {
            $query->where('user_id', '=', $a)
            ->where('receiver_id', '=', $b);
        })
        ->orWhere(function ($query) use ($a, $b) {
            $query->where('user_id', '=', $b)
            ->where('receiver_id', '=', $a);
        })
        ->orderBy('created_at', 'DESC')
        ->select('id', 'user_id', 'receiver_id','message_type', 'msg','file', 'created_at')
        ->with('user1','user2','receiver1','receiver2')
        ->get();
    }
}
