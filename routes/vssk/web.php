<?php

use App\Http\Controllers\FrontActionController;
use App\Http\Controllers\VsskFrontController;
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

Route::domain('vssk.dd')->name('vssk.')->group(function(){

    Route::controller(VsskFrontController::class)->name('front.')->group(function(){
        Route::get('/', 'indexPage')->name('index-page');
    });

    Route::controller(FrontActionController::class)->group(function(){
        
    });
});