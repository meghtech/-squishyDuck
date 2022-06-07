<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Report extends Mailable
{
    use Queueable, SerializesModels;

    public $subject, $message, $emailFrom, $emailTo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $message, $emailFrom, $emailTo)
    {
        $this->subject = $subject;
        $this->message = $message;
        $this->emailFrom = $emailFrom;
        $this->emailTo = $emailTo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('reportEmail')->with(['body'=>$this->message])
            ->from($this->emailFrom)
            ->to($this->emailTo)
            ->subject($this->subject);
    }
}
