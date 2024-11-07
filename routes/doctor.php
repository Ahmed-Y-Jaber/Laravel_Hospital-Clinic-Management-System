<?php

use App\Http\Controllers\Dashboard_Doctor\DiagnosticController;
use App\Http\Controllers\Dashboard_Doctor\LaboratorieController;
use App\Http\Controllers\Dashboard_Doctor\PatientDetailsController;
use App\Http\Controllers\Dashboard_Doctor\RayController;
use App\Http\Controllers\doctor\InvoiceController;
use App\Http\Livewire\Chat\Createchat;
use App\Http\Livewire\Chat\Main;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;





Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){




    //################################ dashboard doctor ##########################################
Route::get('/dashboard/doctor', function () {
    return view('Dashboard.doctor.dashboard');
})->middleware(['auth:doctor'])->name('dashboard.doctor'); // auth:doctor the gard name for doctor

    //################################ end dashboard doctor ##########################################



 Route::middleware(['auth:doctor'])->group(function () {


    Route::prefix('doctor')->group(function () { // حتى يكتب بالرابط كلمة دكتور قبل الراوت

        //############################# invoices route ##########################################
        Route::resource('docinvoices', InvoiceController::class);
        //############################# end invoices route ######################################

        //############################# completed_invoices route ##########################################
        Route::get('completed_invoices', [InvoiceController::class,'completedInvoices'])->name('completedInvoices');
        //############################# end invoices route ################################################

        //############################# review_invoices route ##########################################
        Route::get('review_invoices', [InvoiceController::class,'reviewInvoices'])->name('reviewInvoices');
        //############################# end invoices route #############################################


        //############################# review_invoices route ##########################################
        Route::post('add_review', [DiagnosticController::class,'addReview'])->name('add_review');
        //############################# end invoices route #############################################


        //############################# Diagnostics route ##########################################

        Route::resource('Diagnostics', DiagnosticController::class);

        //############################# end Diagnostics route ######################################

        //############################# rays route ##########################################

        Route::resource('rays', RayController::class);

        Route::get('patient_details/{id}', [PatientDetailsController::class,'index'])->name('patient_details');

        Route::get('show_image/{id}', [App\Http\Controllers\Dashboard_Ray_Employee\InvoiceController::class,'show_image'])->name('show.image');


        //############################# end rays route ######################################

        //############################# Laboratories route ##########################################

        Route::resource('Laboratories', LaboratorieController::class);

        Route::get('show_laboratorie/{id}', [InvoiceController::class,'showLaboratorie'])->name('show.laboratorie');

        //############################# end Laboratories route ######################################



        //############################# Chat route ##########################################
        Route::get('list/patients',Createchat::class)->name('list.patients');
        Route::get('chat/patients',Main::class)->name('chat.patients');
        //############################# end Chat route ######################################


    });

    Route::get('404', function () {
        return view('Dashboard.404');
    })->name ('404');


});

require __DIR__.'/auth.php';


});
