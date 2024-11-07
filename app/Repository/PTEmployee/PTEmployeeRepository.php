<?php

namespace App\Repository\PTEmployee;


use App\Interfaces\PTEmployee\PTEmployeeRepositoryInterface;
use App\Models\PtEmployee;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class PTEmployeeRepository implements PTEmployeeRepositoryInterface
{

    public function index()
    {
        $pt_employees = PTEmployee::all();
        return view('Dashboard.PT_employee.index',compact('pt_employees'));
    }

    public function store($request)
    {
        try {

            $pt_employee = new PtEmployee();
            $pt_employee->name = $request->name;
            $pt_employee->email = $request->email;
            $pt_employee->password = Hash::make($request->password);
            $pt_employee->save();
            session()->flash('add');
            return back();

        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request, $id)
    {
        $input = $request->all();

        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }
        else{
            $input = Arr::except($input, ['password']);
        }

        $pt_employee = PtEmployee::find($id);
        $pt_employee->update($input);

        session()->flash('edit');
        return redirect()->back();
    }

    public function destroy($id)
    {
        try {
            PtEmployee::destroy($id);
            session()->flash('delete');
            return redirect()->back();
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
