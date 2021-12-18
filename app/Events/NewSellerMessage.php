<?php

namespace App\Events;

use App\Models\Seller;
use App\Models\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Facades\Log;


class NewSellerMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user, $message;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Seller $user, Message $message)
    {
        log::info("Seller");
        $this->user = $user;
        $this->message = $message;
    }


    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        log::info("Seller");
        return new PresenceChannel('chat');
    }

    public function broadcastAs()
    {
        return 'NewMessage';
    }
}
