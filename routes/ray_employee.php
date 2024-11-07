<?php

use App\Http\Controllers\Dashboard_Ray_Employee\InvoiceController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;





Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){




    //################################ dashboard RayEmployee ##########################################

Route::get('/dashboard/ray_employee', function () {
    return view('Dashboard.dashboard_RayEmployee.dashboard');
})->middleware(['auth:ray_employee'])->name('dashboard.ray_employee');


    //################################ end dashboard RayEmployee ##########################################



    Route::middleware(['auth:ray_employee'])->group(function () {


    Route::prefix('ray_employees')->group(function () { // حتى يكتب بالرابط كلمة راي ايمبلويي قبل الراوت




        //############################# invoices route ##########################################
       // Route::get('invoices', [InvoiceController::class,'index'])->name('invoices.index');

        Route::resource('invoices_ray_employee',InvoiceController::class);
        Route::get('completed_invoices', [InvoiceController::class,'completed_invoices'])->name('completed_invoices');

        Route::get('view_rays/{id}', [InvoiceController::class,'viewRays'])->name('view_rays');
        //############################# end invoices route ######################################


    });

});

require __DIR__.'/auth.php';


});
