<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailSent extends Mailable
{
    use Queueable, SerializesModels;

    protected $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact['name'] = $contact['name'];
        $this->contact['email'] = $contact['email'];
        $this->contact['user_query'] = $contact['user_query'];

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mailsent')
            ->with(
                [
                'name'            => $this->contact['name'],
                'email'            => $this->contact['email'],
                'user_query'        => $this->contact['user_query'],
                ]
            );    
    }
}
