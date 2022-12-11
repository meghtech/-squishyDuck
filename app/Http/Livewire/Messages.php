<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;
use App\Models\MessagePerson;
use App\Models\User;
use DB;
class Messages extends Component
{

	   public $msg;
	   public $allmessage;
     public $receiver;
     public $sender;
     public $user;
     public $showElement = false;
     public $gotId;
     public $newR;
     public $newS;
     public $getUserID;
	   public $getUserInfo;

 	public function mount()
    {
       // $this->user = User::find($customerId);
        // $this->sender = $user;
            // $this->getUser($sellerId);
            $this->allmessage;

    }
    public function render()
    {
    	// $this->allmessage;
        
        // $allmessage = Message::all();
        $receiverInfo = $this->receiver;
        $senderInfo = $this->sender;
        $messagePerson = MessagePerson::where('customer_id', auth()->id())
                                        ->orWhere('seller_id', auth()->id())
                                        ->get();
        return view('livewire.messages', compact('messagePerson','receiverInfo','senderInfo'));
    }

    public function mountData()
    {
       if (isset($this->receiver->id)) {

          $this->newR = $this->receiver->id;
          $this->newS = $this->sender->id;


          $this->getUserID = auth()->id();

          $this->getUserInfo = User::where('customer_id', $this->getUserID)
                            ->orWhere('seller_id', $this->getUserID)
                            ->first();


           $this->allmessage = Message::where('user_id', $this->newS)
                                      ->where('receiver_id', $this->newR)
                                      ->orWhere('user_id', $this->newR)
                                      ->where('receiver_id', $this->newS)
                                      ->orderBy('created_at', 'ASC')
                                      ->get();


       // $this->allmessage = Message::where(['user_id' => $this->sender->id, 'receiver_id' => $this->sender->id])
       //                                   ->orWhere(['user_id' => $this->receiver->id, 'receiver_id' => $this->receiver->id])
       //                                   ->get();

 


       }
    }

    

    public function resetInput()
    {
    	$this->msg = '';
    }



    public function sendMessage()
    {
        $receiverInfo = $this->receiver;
        $senderInfo = $this->sender;

    	$newMessage = new Message();
    	$newMessage->user_id = $senderInfo->id;
    	$newMessage->receiver_id = $receiverInfo->id;
    	$newMessage->msg = $this->msg;
    	$newMessage->save();
        $this->allmessage->push($newMessage);
    	$this->resetInput();
    }

    public function getUser($user)
    {
      $this->showElement = true;
      $this->gotId = $user;

         $receiverUser = User::where('seller_id', $user)
                            ->orWhere('customer_id', $user)
                            ->first();
         $senderUser = User::where('customer_id', auth()->id())
                            ->orWhere('seller_id', auth()->id())
                            ->first();
         $this->receiver =  $receiverUser;
         $this->sender =  $senderUser;

         // $this->allmessage = Message::where('user_id', $this->sender->id)
         //                              ->where('receiver_id', $this->receiver->id)
         //                              ->orWhere('user_id', $this->receiver->id)
         //                              ->orWhere('receiver_id', $this->sender->id)
         //                              ->get();

         // $this->allmessage = Message::where(['user_id' => $this->sender->id, 'receiver_id' => $this->sender->id])
         //                                 ->orWhere(['user_id' => $this->receiver->id, 'receiver_id' => $this->receiver->id])
         //                                 ->get();


    }
}
