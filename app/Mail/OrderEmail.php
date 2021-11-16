<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class OrderEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $order, $user, $product, $title, $type;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $user, $product, $title, $type)
    {
        $this->order = $order;
        $this->user = $user;
        $this->product = $product;
        $this->title = $title;
        $this->type = $type;
        log::info($order);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('orderEmail')
            ->from('bashar@mtl.com')
            ->to($this->user->email)
            ->subject($this->title);
    }
}
