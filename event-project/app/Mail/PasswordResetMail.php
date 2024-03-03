<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordResetMail extends Mailable
{
    use Queueable, SerializesModels;

    public $token; // Declare the token property
    public $email; // Declare the email property

    /**
     * Create a new message instance.
     *
     * @param string $token The reset token
     * @param string $email The user's email address
     */
    public function __construct($token, $email)
    {
        $this->token = $token;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Password Reset Request')
            ->view('auth.auth-link')
            ->with([
                'token' => $this->token,
                'email' => $this->email,
            ]);
    }
}
