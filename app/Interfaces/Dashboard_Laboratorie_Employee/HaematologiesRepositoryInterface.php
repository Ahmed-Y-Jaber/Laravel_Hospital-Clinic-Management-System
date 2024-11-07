<?php

namespace App\Interfaces\Dashboard_Laboratorie_Employee;

interface HaematologiesRepositoryInterface
{

    public function index();
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request,$id);
    public function show($id);

}
