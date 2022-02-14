<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Htpp\Controller\MasterclassController;

class Subscribemail extends Mailable
{
    use Queueable, SerializesModels;

    Public $subject = "Enhorabuena, estas suscrito";
    Public $contacto = "Esta es la información de contacto";
    public $class_name;
    public $user_name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($class_name, $user_name)
    {
       $this->class_name = $class_name;
       $this->user_name = $user_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $usernameMail ['user_name'] = $this->user_name;
        $courseMail ['class_name'] = $this->class_name;
        return $this->view('mail.subscribe', $usernameMail, $courseMail);
    }
}
