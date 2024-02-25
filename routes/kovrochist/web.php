<?php

use App\Http\Controllers\FrontActionController;
use App\Http\Controllers\KovrochistFrontController;
use App\Http\Middleware\RedirectToHttps;
use Illuminate\Support\Facades\Route;


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

Route::domain(env('KOVROCHIST_DOMAIN'))->name('kovrochist.')->group(function(){
    
    Route::controller(KovrochistFrontController::class)->name('front.')->group(function(){
        Route::get('/', 'indexPage')->name('index-page')->middleware('https');
    });

});