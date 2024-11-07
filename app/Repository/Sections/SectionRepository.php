<?php
namespace App\Repository\Sections;

use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Models\Section;
// use App\Models\Section as ModelsSection;

class SectionRepository implements SectionRepositoryInterface
{

       // get All Sections
       public function index(){
        $sections = Section::all();
        return view('Dashboard.Sections.index',compact('sections'));
       }


       public function store($request)
       {
            Section::create([
               'name' => $request->input('name'),
               'description' => $request->input('description')
           ]);

           session()->flash('add'); // بحيث تظهر رسالة تم اضافة القسم بنجاح
           return redirect()->route('Sections.index');
       }

       public function update($request)
       {
           $section = Section::findOrFail($request->id);
           $section->update([
               'name' => $request->input('name'),
               'description' => $request->input('description')
           ]);
           session()->flash('edit');
           return redirect()->route('Sections.index');
       }


       public function destroy($request)
       {
           Section::findOrFail($request->id)->delete();
           session()->flash('delete');
           return redirect()->route('Sections.index');
       }
}
