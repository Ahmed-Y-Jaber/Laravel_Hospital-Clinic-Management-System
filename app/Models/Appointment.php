<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
//    use Translatable;
//    public $translatedAttributes = ['name'];

// تم ايقاف الترجمة لضيق الوقت في الفرونت
    public $fillable= ['name','email','phone','notes','doctor_id','section_id','type','appointment'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class,'section_id');
    }

}

