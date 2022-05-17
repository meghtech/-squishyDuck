<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Report extends Mailable
{
    use Queueable, SerializesModels;

    public $subject, $message, $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $message, $email)
    {
        $this->subject = $subject;
        $this->message = $message;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('reportEmail')->with(['body'=>$this->message])
            ->from($this->email)
            ->to('squishy2@mtl.com')
            ->subject($this->subject);
    }
}
