<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class ConfirmPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $confirmationLink;

    /**
     * Create a new message instance.
     *
     * @param  string  $confirmationLink
     * @return void
     */
    public function __construct($confirmationLink)
    {
        $this->confirmationLink = $confirmationLink;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.confirmPassword') // Change this to match your email template name
                    ->subject('Change Password') // Change the subject
                    ->with([
                        'confirmationLink' => $this->confirmationLink,
                        'buttonText' => 'Change Password', // Change the button text
                    ]);
    }
}


