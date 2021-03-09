<?php

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

Route::get('/', function () {
    return view('home');
});


Route::get('/fournisseur', [App\Http\Controllers\FourController::class, 'index'])->name('fournisseur');



    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/sen-message',[App\Http\Controllers\ContactController::class, 'sendEmail'])->name('contact.send');


Route::get('/test', function () {
    return view('test');
});


Route::get('/map', function () {
    return view('map');
});