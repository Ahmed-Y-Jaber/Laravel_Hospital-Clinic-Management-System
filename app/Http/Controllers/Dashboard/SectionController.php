<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    private $Sections;

    public function __construct(SectionRepositoryInterface $Sections)
    {
        $this->Sections = $Sections;
    }


    public function index()
    {
        return $this->Sections->index();
    }




    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        return $this->Sections->store($request);
    }


    public function show($id)
    {
       $doctors = Section::findOrfail($id)->doctors;

      $section = Section::findOrfail($id);


         return view('Dashboard.Sections.show_doctors',compact('doctors','section'));
        // return view('Dashboard.Doctors.index',compact('doctors','section'));

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        return $this->Sections->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->Sections->destroy($request);
    }
}
