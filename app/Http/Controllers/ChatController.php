<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Events\NewMessage;
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
            $chatList->push($messages->last());
        }
        $newChat = null;
        $others = null;
        if(!$chatArray['oldUser']){
            $newChat = collect([
                "user_id" => $authUser->id,
                "receiver_id" => $chatTo->id,
                "msg" => null,
                "message_type" => 0,
                "created_at" => now(),
                "user1" => $authUser,
                "receiver1" => $chatTo,
                "user2" => null,
                "receiver2" => null,
            ]);
            $chatList = $chatList->push($newChat);
            $messages = null;
        } else {
            $messages = $this->message($authUser->id, $chatTo->id);
        }
        if(auth()->guard('seller')->check()){
            return view('seller.chat', compact('chatList', 'chatTo', 'authUser', 'messages'));
        }
        else{
            return view('customer.chat', compact('chatList', 'chatTo', 'authUser', 'messages'));
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

    public function fetchMessage(Request $request){
        return $this->message($request->a, $request->b);
    }

    public function sendMessage(Request $request){
        $user = auth()->guard('customer')->user();
        if(!$user){
            $user = auth()->guard('seller')->user();
        }
        if($request->message_type == 1){
            $message = $user->messages()->create([
                'user_id' => $request->user_id,
                'receiver_id' => $request->receiver_id,
                'message_type' => $request->message_type,
                'msg' => $request->msg,
            ]);
        }

        broadcast(new NewMessage($user, $message))->toOthers();
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
        ->orderBy('created_at', 'ASC')
        ->select('id', 'user_id', 'receiver_id','message_type', 'msg','file', 'created_at')
        ->with('user1','user2','receiver1','receiver2')
        ->get();


    }
}
