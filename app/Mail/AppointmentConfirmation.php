<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentConfirmation extends Mailable
{
    use Queueable, SerializesModels;


    public $name;
    public $appointment;
    public $section;

    public function __construct($name,$appointment)
    {
        $this->name=$name;
        $this->appointment=$appointment;
//        $this->section->name=$section;
    }


    public function build()
    {
        return $this->markdown('emails.appointments');
    }
}
