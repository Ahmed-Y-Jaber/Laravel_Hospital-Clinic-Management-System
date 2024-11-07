<?php

namespace App\Interfaces\PTEmployee;

interface PTEmployeeRepositoryInterface
{
    public function index();

    public function store($request);

    public function update($request,$id);

    public function destroy($id);
}
