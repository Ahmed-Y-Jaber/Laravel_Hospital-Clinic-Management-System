<?php

namespace App\Http\Controllers\Dashboard_Patient;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard_Patient\Patient_DetailsRepositoryInterface;



class Patient_DetailsController extends Controller
{

    private $Patient_Details;

    public function __construct(Patient_DetailsRepositoryInterface $Patient_Details)
    {
        $this->Patient_Details = $Patient_Details;
    }

    public function invoices(){
        return $this->Patient_Details->invoices();
    }

    public function laboratories(){
        return $this->Patient_Details->laboratories();
    }

    public function viewLaboratories($id){

        return $this->Patient_Details->viewLaboratories($id);
    }

    public function rays(){

        return $this->Patient_Details->rays();
    }

    public function viewRays($id){

        return $this->Patient_Details->viewRays($id);
    }

    public function payments(){

        return $this->Patient_Details->payments();
    }
}
