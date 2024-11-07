<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use Translatable; // 2. To add translation methods
    protected $fillable =['name','description']; // هي مش موجودة ضمن جدول سيكشن ولكني اريدها في سيكشن نيم
    // 3. To define which attributes needs to be translated
    public $translatedAttributes = ['name','description'];
    use HasFactory;


    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
    
}
