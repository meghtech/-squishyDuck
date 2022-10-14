<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Events\NewCustomerMessage;
use App\Events\NewMessage;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Message;
use Twilio\Rest\Client;
use App\Models\Seller;

class ChatController extends Controller
{
    public function index($id, $type)
    {
        $sender_type = "customer";
        $receiver_type = $type === "buyer" ? "customer" : "seller";
        $authUser = auth()->user();
        $sender_type = Auth::getDefaultDriver();
        $chatTo = ["id"=> null];
        if($receiver_type === "customer") {
            $chatTo = Customer::find($id);
        } elseif ($receiver_type === "seller") {
            $chatTo = Seller::find($id);
        }
        $chatArray = $this->getChatList($authUser->id, $chatTo->id, $sender_type);
        $chatedWith = $chatArray['chatList'];
        $chatList = collect();
        foreach($chatedWith as $key=>$user){
            $messages = $this->message($authUser->id, $sender_type, $user, $receiver_type);
            $chatList->push($messages->last());
        }
        $newChat = null;
        $others = null;
        if(!$chatArray['oldUser']){
            $newChat = collect([
                "user_id" => $authUser->id,
                "sender_type" => $sender_type,
                "receiver_id" => $chatTo->id,
                "receiver_type" => $receiver_type,
                "msg" => null,
                "message_type" => 0,
                "created_at" => now(),
                "user1" =>  $sender_type == "seller" ? $authUser : null,
                "receiver1" => $receiver_type == "seller" ? $chatTo : null,
                "user2" => $sender_type == "customer" ? $authUser : null,
                "receiver2" => $receiver_type == "customer" ? $chatTo : null,
            ]);
            $chatList = $chatList->push($newChat);
            $messages = null;
        } else {
            $messages = $this->message($authUser->id, $sender_type, $chatTo->id, $receiver_type);
        }
        if(Auth::guard('seller')->check()){
            log::info($receiver_type);
            return view('seller.chat', compact('chatList', 'chatTo', 'authUser', 'messages', 'receiver_type'));
        }
        else{
            return view('customer.chat', compact('chatList', 'chatTo', 'authUser', 'messages', 'receiver_type'));
        }
    }

    private function getChatList($authId, $id, $type){
        $receivers = Message::orderBy('id', 'desc')->where('user_id', $authId )->where('sender_type', $type)->pluck('receiver_id')->toArray();
        $senders = Message::orderBy('id', 'desc')->where('receiver_id', $authId)->where('receiver_type', $type)->pluck('user_id')->toArray();
        $chatList = array_unique(array_merge($receivers, $senders));
        $oldUser = in_array($id, $chatList);
        return [
            'chatList' => $chatList,
            'oldUser' => $oldUser,
        ];
    }

    public function fetchMessage(Request $request){
        return $this->message($request->a, $request->sender_type, $request->b, $request->receiver_type);
    }

    public function sendMessage(Request $request){
        $user = auth()->user();
        $sender_type = $request->sender_type;
        $receiver = null;
        $receiver_type = $request->receiver_type;

        if($receiver_type === "seller") {
            $receiver = Seller::find($request->receiver_id);
        } elseif ($receiver_type === "customer") {
            $receiver = Customer::find($request->receiver_id);
        }
        if($request->message_type == 1){
            $message = $user->messages()->create([
                'user_id' => $request->user_id,
                'sender_type' => $sender_type,
                'receiver_id' => $request->receiver_id,
                'receiver_type' => $receiver_type,
                'message_type' => $request->message_type,
                'msg' => $request->msg,
            ]);
            $txtMessage = $user->name.": ".$message->msg;
        } elseif($request->message_type == 2){
            if($request->file()){
                //get filename with extension
                $filenamewithextension = $request->file->getClientOriginalName();
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                //get file extension
                $extension = $request->file->getClientOriginalExtension();
                //filename to store
                $file_name = $filename . '_' . time() . '.' . $extension;
                if (!File::exists(public_path() . "/content/images/message")) {
                    File::makeDirectory(public_path() . "/content/images/message", 0777, true);
                }
                $request->file->move(public_path('/content/images/message'), $file_name);
            }
            $message = $user->messages()->create([
                'user_id' => $request->user_id,
                'sender_type' => $sender_type,
                'receiver_id' => $request->receiver_id,
                'receiver_type' => $receiver_type,
                'message_type' => $request->message_type,
                'file' => $file_name,
            ]);
            $txtMessage = $user->name." sent an image";
        }
        $message->user1 =  $sender_type == "seller" ? $user : null;
        $message->receiver1 =  $receiver_type == "seller" ? $receiver : null;
        $message->user2 =  $sender_type == "customer" ? $user : null;
        $message->receiver2 =  $receiver_type == "customer" ? $user : null;
        broadcast(new NewMessage($user, $message))->toOthers();
        if($receiver->phone){
            $this->sendSMS($txtMessage, $receiver->phone);
        }
        return $message;
    }

    private function sendSMS($message, $recipient) {
            $sid = env("TWILIO_SID");
            $token = env("TWILIO_TOKEN");
            $twilio_number = env("TWILIO_NUMBER");
            $client = new Client($sid, $token);
            $client->messages->create($recipient, ['from' => $twilio_number, 'body' => $message]);
    }

    private function message($a, $sender_type, $b, $receiver_type){
        return Message::
        where(function ($query) use ($a, $sender_type, $b, $receiver_type) {
            $query->where('user_id', $a)
            ->where('sender_type', $sender_type)
            ->where('receiver_id', $b)
            ->where('receiver_type',$receiver_type);
        })
        ->orWhere(function ($query) use ($a, $sender_type, $b, $receiver_type) {
            $query->where('user_id', '=', $b)
            ->where('sender_type', '=', $receiver_type)
            ->where('receiver_id', '=', $a)
            ->where('receiver_type', '=', $sender_type);
        })
        ->orderBy('created_at', 'ASC')
        ->select('id', 'user_id', 'sender_type', 'receiver_id', 'receiver_type', 'message_type', 'msg','file', 'created_at')
        ->with('user1', 'user2', 'receiver1', 'receiver2')
        ->get();
    }
}
