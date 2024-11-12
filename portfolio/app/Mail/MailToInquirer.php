<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailToInquirer extends Mailable
{
    use SerializesModels;

    public $data;

    // Constructor to pass data to the mail
    public function __construct($data)
    {
        $this->data = $data;
    }

    // Build the message
    public function build()
    {
        return $this->subject('Thank you for inquiring!')
            ->view('emails.mail-to-inquirer')
            ->with('data', $this->data);
    }
}
