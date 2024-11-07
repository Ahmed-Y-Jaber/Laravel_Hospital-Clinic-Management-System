<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\doctor_dashboard\InvoicesRepositoryInterface;
use App\Models\Image;
use App\Models\Ray;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    private $invoice;

public function __construct(InvoicesRepositoryInterface $invoice)
{
    $this->invoice = $invoice;
}



public function index()
{
    return $this->invoice->index();
}

public function show($id)
{
    return $this->invoice->show($id);
}


public function showLaboratorie($id)
{
    return $this->invoice->showLaboratorie($id);
}

public function reviewInvoices()
{
    return $this->invoice->reviewInvoices();
}
public function completedInvoices()
{
    return $this->invoice->completedInvoices();
}



}
