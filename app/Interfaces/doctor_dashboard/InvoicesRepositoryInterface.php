<?php

namespace App\Interfaces\doctor_dashboard;

interface InvoicesRepositoryInterface
{
    // Get Invoices Doctor
    public function index();

    // show ray img
    public function show($id);

    // View Laboratories
    public function showLaboratorie($id);

    public function reviewInvoices();

    public function completedInvoices();
}
