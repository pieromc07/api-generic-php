<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactServipac extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Contacto Servipac via web';


    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('boot.servipac@gmail.com', 'Boot Servipac')
                    ->view('mail.sevipac')
                    ->subject($this->subject);

    }
}
