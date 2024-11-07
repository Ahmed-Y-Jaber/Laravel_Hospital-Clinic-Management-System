<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Interfaces\PTEmployee\PTEmployeeRepositoryInterface;
use App\Models\PTEmployee;

use Illuminate\Http\Request;

class PTEmployeeController extends Controller
{

    private $PT_employee;

    public function __construct(PTEmployeeRepositoryInterface $PT_employee)
    {
        $this->PT_employee = $PT_employee;
    }

    public function index()
    {
      //  return 'aaa';

        return $this->PT_employee->index();
    }




    public function store(Request $request)
    {
        return $this->PT_employee->store($request);
    }



    public function update(Request $request, $id)
    {
        return $this->PT_employee->update($request,$id);
    }

    public function destroy($id)
    {
        return $this->PT_employee->destroy($id);
    }
}
