<?php


namespace App\Interfaces\Finance;


interface PaymentRepositoryInterface
{
    // get All Receipt
    public function index();

    // show form add
     public function create();

    // store Payment
    public function store($request);

    // show Payment
      public function show($id);

    // edit Payment
     public function edit($id);

    // Update Payment
     public function update($request);

    // destroy Payment
     public function destroy($request);
}
