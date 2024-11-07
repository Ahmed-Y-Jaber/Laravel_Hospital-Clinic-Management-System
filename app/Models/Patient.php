<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends authenticatable
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['name','Address'];
    public $fillable= ['email','Password','Date_Birth','Phone','Gender','Blood_Group'];


    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');   // imageable  هي اسم العلاقة في موديل الصور
    }
}
