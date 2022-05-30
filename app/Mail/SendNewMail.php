<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $guestName;
    protected $guestEmail;
    protected $guestMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($guestName, $guestEmail, $guestMessage)
    {
        $this->guestName = $guestName;
        $this->guestEmail = $guestEmail;
        $this->guestMessage = $guestMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->from($this->guestEmail)->subject('titolo della mail')
        return $this->from($this->guestEmail)->markdown('email.body', ["name" => $this->guestName, "email" => $this->guestEmail, "message" => $this->guestMessage]);
        //return $this->replyTo($this->guestEmail)->view('email.body', ["name" => $this->guestName, "email" => $this->guestEmail, "message" => $this->guestMessage]);
    }
}
