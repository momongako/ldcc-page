<?php

namespace App\Mail;

use App\Lib\BHelp;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contact;
    public $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact,$body)
    {
        //
        $this->contact = $contact;
        $this->body = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject(BHelp::getConfigSetting('CONTACT_MAIL_SUBJECT'))
            ->view('emails.contact');
    }
}
