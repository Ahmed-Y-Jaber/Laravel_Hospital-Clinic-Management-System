<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;





Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){




    //################################ dashboard RayEmployee ##########################################

Route::get('/dashboard/PT_employee', function () {
    return view('Dashboard.dashboard_PTEmployee.dashboard');
})->middleware(['auth:pt_employee'])->name('dashboard.pt_employee');


    //################################ end dashboard ptEmployee ##########################################



    Route::middleware(['auth:pt_employee'])->group(function () {


    Route::prefix('pt_employees')->group(function () { // حتى يكتب بالرابط كلمة راي ايمبلويي قبل الراوت


    });
});

require __DIR__.'/auth.php';


});
