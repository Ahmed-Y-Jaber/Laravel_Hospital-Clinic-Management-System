<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientAccount extends Model
{
    use HasFactory;

    public function Invoice()
    {
        return $this->belongsTo(Invoice::class,'invoice_id');
    }

    public function ReceiptAccount()
    {
        return $this->belongsTo(ReceiptAccount::class,'receipt_id');
    }


    public function PaymentAccount()
    {
        return $this->belongsTo(PaymentAccount::class,'Payment_id');
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');   // imageable  هي اسم العلاقة في موديل الصور
    }
}
