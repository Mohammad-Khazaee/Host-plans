<?php

use App\Http\Controllers\AddAttributeController;
use App\Http\Controllers\HostController;
use App\Http\Controllers\showHostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[showHostController::class , 'index']);

Route::group(['middleware' => 'auth','prefix' => 'Hosts'], function() {
    
    Route::resource('/', HostController::class)->name('index','dashboard');
    Route::resource('/store', HostController::class);
    Route::delete('/delete', [HostController::class , 'destroy']);
    Route::get('AddAttribute',[AddAttributeController::class , 'AddAttribute']);
    Route::get('AddAttribute/store',[AddAttributeController::class , 'store']);

});

require __DIR__.'/auth.php';
