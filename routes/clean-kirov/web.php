<?php

use App\Http\Controllers\CleanKirovFrontController;
use App\Http\Controllers\FrontActionController;
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

Route::domain('himchistka.dd')->name('clean-kirov.')->group(function(){

    Route::controller(CleanKirovFrontController::class)->name('front.')->group(function(){
        Route::get('/', 'indexPage')->name('index-page');
    });

    Route::controller(FrontActionController::class)->name('action')->group(function(){

    });
    
});