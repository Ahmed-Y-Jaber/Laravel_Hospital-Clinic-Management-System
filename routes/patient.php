<?php


use App\Http\Controllers\Dashboard_Patient\Patient_DetailsController;
use App\Http\Livewire\Chat\Createchat;
use App\Http\Livewire\Chat\Main;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    //################################ dashboard patient ########################################

    Route::get('/dashboard/patient', function () {
        return view('Dashboard.dashboard_patient.dashboard');
    })->middleware(['auth:patient'])->name('dashboard.patient');
    //################################ end dashboard patient #####################################

    Route::middleware(['auth:patient'])->group(function () {

        //############################# patients route ##########################################
        Route::get('invoices', [Patient_DetailsController::class,'invoices'])->name('invoices.patient');
        Route::get('laboratories', [Patient_DetailsController::class,'laboratories'])->name('laboratories.patient');
        Route::get('view_laboratories/{id}', [Patient_DetailsController::class,'viewLaboratories'])->name('laboratories.view');
        Route::get('rays', [Patient_DetailsController::class,'rays'])->name('rays.patient');
        Route::get('view_rays/{id}', [Patient_DetailsController::class,'viewRays'])->name('rays.view');
        Route::get('payments', [Patient_DetailsController::class,'payments'])->name('payments.patient');
        //############################# end patients route ######################################


        //############################# Chat route ##########################################
        Route::get('list/doctors',Createchat::class)->name('list.doctors');
        Route::get('chat/doctors',Main::class)->name('chat.doctors');
        //############################# end Chat route ######################################




    });
    require __DIR__ . '/auth.php';

});
