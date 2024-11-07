<?php

namespace App\Repository\Dashboard_Laboratorie_Employee;

use App\Interfaces\Dashboard_Laboratorie_Employee\HaematologiesRepositoryInterface;
use App\Models\Invoice;
use App\Models\labHaematology;
use App\Models\Laboratorie;
use Illuminate\Http\Request;

class HaematologiesRepository implements HaematologiesRepositoryInterface
{

    public function index()
    {
//        dd("aaaaaaaaaaa");

//        $Haematologies = labHaematology::orderBy('created_at', 'desc')->get();

        $Haematologies = labHaematology::all()->sortDesc();
        return view ('Dashboard.dashboard_LaboratorieEmployee.Haematology.index',compact('Haematologies'));
    }

    public function create()
    {
        $invoice = Invoice::all();

        return view('Dashboard.dashboard_LaboratorieEmployee.Haematology.create');
    }


    public function store($request)
    {

        try {
            labHaematology::create([

                'invoice_id' => $request->invoice_id,
                'patient_id' => $request->patient_id,
                'doctor_id' => $request->doctor_id,
                'employee_id' => auth()->user()->id,
                'lab_date' => date('y-m-d'),
                'HGB' => $request->HGB,
                'n_HGB' => $request->n_HGB,
                'HCT' => $request->HCT,
                'n_HCT' => $request->n_HCT,
                'RBCs' => $request->RBCs,
                'n_RBCs' => $request->n_RBCs,
                'MCV' => $request->MCV,
                'n_MCV' => $request->n_MCV,
                'MCH' => $request->MCH,
                'n_MCH' => $request->n_MCH,
                'MCHC' => $request->MCHC,
                'n_MCHC' => $request->n_MCHC,
                'PLT' => $request->PLT,
                'n_PLT' => $request->n_PLT,
                'WBCs' => $request->WBCs,
                'n_WBCs' => $request->n_WBCs,
                'Blood_Group' => $request->Blood_Group,
                'n_Blood_Group' => $request->n_Blood_Group,
                'Rh' => $request->Rh,
                'n_Rh' => $request->n_Rh,
                'Reticulocyte_Count' => $request->Reticulocyte_Count,
                'n_Reticulocyte_Count' => $request->n_Reticulocyte_Count,
                'Neutrophils' => $request->Neutrophils,
                'n_Neutrophils' => $request->n_Neutrophils,
                'Lymphocytes' => $request->Lymphocytes,
                'n_Lymphocytes' => $request->n_Lymphocytes,
                'Monocytes' => $request->Monocytes,
                'n_Monocytes' => $request->n_Monocytes,
                'Eosinophils' => $request->Eosinophils,
                'n_Eosinophils' => $request->n_Eosinophils,
                'Basophils' => $request->Basophils,
                'n_Basophils' => $request->n_Basophils,
                'Abnormal_Cells' => $request->Abnormal_Cells,
                'n_Abnormal_Cells' => $request->n_Abnormal_Cells,
                'Bleeding_time' => $request->Bleeding_time,
                'n_Bleeding_time' => $request->n_Bleeding_time,
                'Clotting_Time' => $request->Clotting_Time,
                'n_Clotting_Time' => $request->n_Clotting_Time,
                'PT' => $request->PT,
                'n_PT' => $request->n_PT,
                'Activity' => $request->Activity,
                'n_Activity' => $request->n_Activity,
                'Control' => $request->Control,
                'n_Control' => $request->n_Control,
                'INR' => $request->INR,
                'n_INR' => $request->n_INR,
                'APTT' => $request->APTT,
                'n_APTT' => $request->n_APTT,
                'Fibrinogen' => $request->Fibrinogen,
                'n_Fibrinogen' => $request->n_Fibrinogen,
                'Factor' => $request->Factor,
                'n_Factor' => $request->n_Factor,
                'ESR1' => $request->ESR1,
                'ESR2' => $request->ESR2,
                'n_ESR' => $request->n_ESR,
            ]);
            session()->flash('add');
//            return redirect()->back();
            return redirect()->route('lab_Haematology.index');
            //  return view ('Dashboard.dashboard_LaboratorieEmployee.Haematology.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function edit($id)
    {
        $haema = labHaematology::findorfail($id);

        return view('Dashboard.dashboard_LaboratorieEmployee.Haematology.edit',compact('haema'));


    }

    public function update($request, $id)
    {

//        $invoice = labHaematology::findorFail($id);
//
//        $invoice->update([
//         //   'employee_id'=> auth()->user()->id,
//            'HGB'=> $request->HGB,
//            'HCT'=> $request->HCT,
//            'RBCs'=> $request->RBCs,
//            'MCV'=> $request->MCV,
//            'MCH'=> $request->MCH,
//            'MCHC'=> $request->MCHC,
//           // 'case'=> 1,
//        ]);
    }

    public function show($id)
    {
        // return 'aaa';

        //   $invoice = Invoice::findorFail($id);
        $invoice = Laboratorie::findorFail($id);
        return view('Dashboard.dashboard_LaboratorieEmployee.Haematology.create',compact('invoice'));
    }
}
