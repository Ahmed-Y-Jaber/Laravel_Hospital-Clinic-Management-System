<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Createchat extends Component
{

    public $users;
    public $auth_email;

    public function mount()
    {
        $this->auth_email = auth()->user()->email;
    }


    public function createConversation($receiver_email){

       // dd ("yes");

        // dd (auth()->user()->email); // ---- Trying to get property 'email' of non-object
       // in live wire it must include in mount and define it in public

       // dd ($this->auth_email);
      //  dd ($receiver_email);

        $chek_Conversation = Conversation::chekConversation($this->auth_email, $receiver_email)->get();
        if ($chek_Conversation->isEmpty()) {
        // chek if sender
        DB::beginTransaction();
        try {
            // $createConversation

            $createConversation = Conversation::create([
                'sender_email' => $this->auth_email,
                'receiver_email' => $receiver_email, // defined it in createchat.blade
                'last_time_message' => null,
            ]);
            // create message
            Message::create([
                'conversation_id' => $createConversation->id, // ياخد رقم المحادثة من فوق
                'sender_email' => $this->auth_email,
                'receiver_email' => $receiver_email,
                'body' => 'السلام عليكم',
            ]);

            DB::commit();

        } catch (\ Exception $e) {
            DB::rollBack();
        }
        } else {

            dd('Conversation yes');
        }


    }
    public function render()
    {
//        if the session doctor get patient data and the opposit
        if (Auth::guard('patient')->check()) {
            $this->users = Doctor::all();
        } else {
            $this->users = Patient::all();
        }
//        dd ($this->users);
        return view('livewire.chat.createchat')->extends('Dashboard.layouts.master');
    }
}
