<?php

namespace App\Http\Controllers\Dashboard_Ray_Employee;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard_Ray_Employee\InvoicesRepositoryInterface;
use App\Models\Image;
use App\Models\Ray;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{


    private $Ray_Employee;

    public function __construct(InvoicesRepositoryInterface $Ray_Employee)
    {
        $this->Ray_Employee = $Ray_Employee;
    }


    public function index()
    {
        // return 111111111;

       return $this->Ray_Employee->index();
    }

    public function viewRays($id)
    {

        return $this->Ray_Employee->view_rays($id);
    }

    public function show_image($id){
//       return 'aaa';


        $img = Image::findOrFail($id);
//        $rays = Ray::findorFail($id);
        return view('Dashboard.doctor.invoices.view_ray_zoom',compact('img'));

    }

    public function completed_invoices()
    {
        //  return 111111111;

        return $this->Ray_Employee->completed_invoices();
    }


    public function edit($id)
    {
        // return 111111111;

       return $this->Ray_Employee->edit($id);
    }

    public function update(Request $request, $id)
    {
        // return 111111111;

       return $this->Ray_Employee->update($request, $id);
    }

}
