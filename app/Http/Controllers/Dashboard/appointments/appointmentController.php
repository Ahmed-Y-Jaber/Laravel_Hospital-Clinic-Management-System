<?php

namespace App\Http\Controllers\Dashboard\appointments;

use App\Http\Controllers\Controller;
use App\Mail\AppointmentConfirmation;
use App\Models\Appointment;
use App\Models\ReceiptAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class appointmentController extends Controller
{
    public function index(){

        $appointments = Appointment::where('type','uncertain')->get();
        return view('Dashboard.appointments.index',compact('appointments'));

    }

    public function index2(){
//        return 0;
        $appointments = Appointment::where('type','certain')->get();
        return view('Dashboard.appointments.index2',compact('appointments'));

    }

    public function index3(){

        $appointments = Appointment::where('type','finished')->get();
        return view('Dashboard.appointments.index3',compact('appointments'));

    }
    public function aaa(){

    }
    public function approval (Request $request, $id){

        $appointment = Appointment::findOrfail($id);
        $appointment->update([
            'type'          =>'certain',
            'appointment'   =>$request->appointment
        ]);

        mail::to($appointment->email)->send(new AppointmentConfirmation($appointment->name,$appointment->appointment));
        session()->flash('add');
        return back();

    }

    public function finished ($id){

        $appointment = Appointment::findOrfail($id);
        $appointment->update([
            'type'          =>'finished',
//            'appointment'   =>$request->appointment
        ]);

        session()->flash('add');
        return back();

        return  $appointment;

    }

    public function destroy ( $id){

        try {

            Appointment::destroy($id);
            session()->flash('delete');
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

}
