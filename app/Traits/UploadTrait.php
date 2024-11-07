<?php

namespace App\Traits;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait UploadTrait{

    // تم تعريف مكان تخزين الصور في ملف
    // config--- filesystems
    public function verifyAndStoreImage(Request $request, $inputname , $foldername , $disk, $imageable_id, $imageable_type) {

        // $foldername , $disk عشان اكريت الفولدر الي بدي اياه بالمكان الي بدي ايه
        // $imageable_type اسم الموديل الي تابعة له

        if( $request->hasFile( $inputname ) ) { // متغير من اي اسم جاي

            // Check img
            if (!$request->file($inputname)->isValid()) {
                flash('Invalid Image!')->error()->important();
                return redirect()->back()->withInput();
            }

            $photo = $request->file($inputname);
           $name = \Str::slug($request->input('name'));  // slug بتعمل -
        //    $name =time();
            $filename = $name. '.' . $photo->getClientOriginalExtension();


            // insert Image
            $Image = new Image();
            $Image->filename = $filename;
            $Image->imageable_id = $imageable_id;
            $Image->imageable_type = $imageable_type;
            $Image->save();
            return $request->file($inputname)->storeAs($foldername, $filename, $disk);

        }

        return null;

    }



    public function verifyAndStoreImageForeach($varforeach , $foldername , $disk, $imageable_id, $imageable_type) {

        // insert Image
        $Image = new Image();
        $Image->filename = time().'-'.$varforeach->getClientOriginalName();
        $Image->imageable_id = $imageable_id;
        $Image->imageable_type = $imageable_type;
        $Image->save();
        return $varforeach->storeAs($foldername, time().'-'.$varforeach->getClientOriginalName(), $disk);
    }


    public function Delete_attachment($disk,$path,$id){

        Storage::disk($disk)->delete($path);
        image::where('imageable_id',$id)->delete();

    }






}
