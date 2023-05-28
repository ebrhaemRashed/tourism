<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\TestSurveyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
    // start Route

        Route::get('/', function () {
            return view('welcome');
        })->name('/');
        
        Route::get('/', function () {
            return view('welcome');
        })->name('/');
        Route::get('/survey', function () {
            return view('frontend.page.survey');
        })->name('survey');
        Route::get('/surveyfacke', function () {
            return view('frontend.page.surveyfacke');
        })->name('surveyfacke');
        Route::get('/thank_you', function () {
            return view('frontend.page.thank_you');
        })->name('/thank_you');

        // Route::get('/sign_in', function () {
        //     return view('frontend.page.sign_in');
        // })->name('/sign_in');
        
        
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');
        require __DIR__.'/auth.php';





        // test servey page (users)
        Route::get('/index_survey', [TestSurveyController::class,'index'])->name('index_survey');
        Route::get('/sign_in', [TestSurveyController::class,'signIn'])->name('signIn_survey');
        Route::post('/thank_you', [TestSurveyController::class,'thankYou'])->name('thank_you_survey');


        
    // End Route
});