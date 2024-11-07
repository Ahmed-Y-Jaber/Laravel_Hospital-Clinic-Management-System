<?php

namespace App\Http\Controllers\Dashboard_Laboratorie_Employee;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard_Laboratorie_Employee\HaematologiesRepositoryInterface;
use App\Models\labHaematology;
use Illuminate\Http\Request;

class LabHaematologyController extends Controller
{
    private $Haematology;

    public function __construct(HaematologiesRepositoryInterface $Haematology)
    {
        $this->Haematology = $Haematology;
    }

    public function index()
    {
//      return  ("aaaaaaaaaaa");
      return $this->Haematology->index();
    }


    public function create()
    {

        return $this->Haematology->create();
    }


    public function store(Request $request)
    {

        return $this->Haematology->store($request);

    }


    public function show($id)
    {
        return $this->Haematology->show($id);
    }


    public function edit($id)
    {
        return $this->Haematology->edit($id);
    }


    public function update(Request $request, labHaematology $labHaematology)
    {
        //
    }


    public function destroy(labHaematology $labHaematology)
    {
        //
    }
}
