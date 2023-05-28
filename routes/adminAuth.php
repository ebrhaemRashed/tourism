<?php

use App\Http\Controllers\AdminAuth\AuthenticatedSessionController;
use App\Http\Controllers\Ckeditor\Ckeditor;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
    // start Route
    Route::redirect('/admin','/admin/login');
    Route::post('/pages/uploadImage',[Ckeditor::class,'uploadImage'])->name('upload.image');

    Route::middleware('CheckAuthAdmin')->prefix('admin')->group(function () {
        Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');
        Route::post('login', [AuthenticatedSessionController::class, 'store']);
    });

    Route::prefix('admin')->group(function () {
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
    });

    // End Route
});
