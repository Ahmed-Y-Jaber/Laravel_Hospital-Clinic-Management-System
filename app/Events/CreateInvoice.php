<?php

namespace App\Events;

use App\Models\Patient;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CreateInvoice implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $patient;
    public $invoice_id;
    public $doctor_id;
    public $message;
    public $created_at;


    public function __construct($data)
    {
        $patient = Patient::find($data['patient']); //المتغير الي فوق
        $this->patient = $patient->name;
        $this->doctor_id = $data['doctor_id']; // for private and we get it from data came from singleinvoices
        $this->invoice_id = $data['invoice_id']; //المتغير الي فوق
        $this->message = "كشف جديد : ";
        $this->created_at =date('Y-m-d H:i:s');
    }


    public function broadcastOn()
    {
        return new PrivateChannel('create-invoice.'.$this->doctor_id);  //  for Private channel
        // go to route-> channels

        //**********

      //  return ['create-invoice'];   //  for Public channel
        // بنعرفها في main header
        // لا تنسى تعرف CreateInvoice ايضا في main header
        //channel.bind('App\\Events\\CreateInvoice', function(data)
    }

    public function broadcastAs()
    {
        return 'create-invoice';  // we copy this name in route->channels
    }
}
