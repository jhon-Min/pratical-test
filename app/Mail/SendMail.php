<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public $data)
    {
    }

    public function build()
    {
        return $this->subject('You have successfully send')->view('contact.mail-frame');
    }
}
