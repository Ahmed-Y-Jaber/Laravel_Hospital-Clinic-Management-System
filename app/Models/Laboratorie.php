<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorie extends Model
{
    use HasFactory;

     protected $guarded=[];
  //  protected $fillable= ['invoice_id','patient_id','doctor_id','description'];

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

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
