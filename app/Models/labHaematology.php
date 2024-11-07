<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class labHaematology extends Model
{
    use HasFactory;
//  protected $guarded=[];

    protected $fillable =['invoice_id','patient_id','doctor_id','employee_id','lab_date',
        'HGB','n_HGB','HCT','n_HCT','RBCs','n_RBCs','MCV','n_MCV','MCH','n_MCH','MCHC','n_MCHC',
        'Blood_Group','n_Blood_Group','Rh','n_Rh','Reticulocyte_Count','n_Reticulocyte_Count','Neutrophils','n_Neutrophils',
        'Lymphocytes','n_Lymphocytes','Monocytes','n_Monocytes','Eosinophils','n_Eosinophils','Basophils','n_Basophils',
        'Abnormal_Cells','n_Abnormal_Cells','Bleeding_time','n_Bleeding_time','Clotting_Time','n_Clotting_Time',
        'PT','n_PT','Activity','n_Activity','Control','n_Control','INR','n_INR','APTT','n_APTT',
        'Fibrinogen','n_Fibrinogen','Factor','n_Factor','ESR1','ESR2','n_ESR'];


    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }

    public function employee()
    {
        return $this->belongsTo(LaboratorieEmployee::class,'employee_id')
            ->withDefault(['name'=>'noEmployee']);
    }


    public function Patient()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }
}
