<?php

namespace App\Repository\Dashboard_Patient;

use App\Models\Invoice;
use App\Models\Laboratorie;
use App\Models\Ray;
use App\Models\ReceiptAccount;
use App\Interfaces\Dashboard_Patient\Patient_DetailsRepositoryInterface;

class Patient_DetailsRepository implements Patient_DetailsRepositoryInterface
{

    public function invoices()
    {
        $invoices = Invoice::where('patient_id',auth()->user()->id)->get();
        return view('Dashboard.dashboard_patient.invoices',compact('invoices'));
    }

    public function laboratories()
    {
        $laboratories = Laboratorie::where('patient_id',auth()->user()->id)->get();
        return view('Dashboard.dashboard_patient.laboratories',compact('laboratories'));
    }

    public function viewLaboratories($id)
    {
        $laboratorie = Laboratorie::findorFail($id);
        if($laboratorie->patient_id !=auth()->user()->id){
            return redirect()->route('404');
        }
        return view('Dashboard.dashboard_LaboratorieEmployee.invoices.patient_details', compact('laboratorie'));
    }

    public function rays()
    {
        $rays = Ray::where('patient_id',auth()->user()->id)->get();
        return view('Dashboard.dashboard_patient.rays',compact('rays'));
    }

    public function viewRays($id)
    {
        $rays = Ray::findorFail($id);
        if($rays->patient_id !=auth()->user()->id){
            return redirect()->route('404');
        }
        return view('Dashboard.dashboard_RayEmployee.invoices.patient_details', compact('rays'));
    }

    public function payments()
    {
        $payments = ReceiptAccount::where('patient_id',auth()->user()->id)->get();
        return view('Dashboard.dashboard_patient.payments',compact('payments'));
    }
}
