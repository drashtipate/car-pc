<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Mailmastersubscribe extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {

        return new Envelope(
            // subject: $this->subject
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        // $details = $this->credentials;
        return new Content(
            view: 'user::email.email_subscribe',
        );
    }

    /**
     * build the message
     * 
     * @return $this 
     */
    public function build()
    {
        // $details = $this->credentials;
        // return $this->subject($details['subject'])->view('user::email.email_subscribe', compact('details'));

        $details = $this->credentials;
    
        return $this->subject($details['subject'])
                ->to($details['email']) // Set the recipient's email address here
                ->view('user::email.email_subscribe', compact('details'));
        
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
