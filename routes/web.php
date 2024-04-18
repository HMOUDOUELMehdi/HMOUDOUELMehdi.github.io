<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/registerClient', 'App\Http\Controllers\RegistrationControllerClient@showRegistrationForm')->name('registerClient');
Route::post('/registerClient', 'App\Http\Controllers\RegistrationControllerClient@register')->name('registerClient.submit');

Route::get('/registerAgence', 'App\Http\Controllers\RegistrationControllerAgence@showRegistrationForm')->name('registerAgence');
Route::post('/registerAgence', 'App\Http\Controllers\RegistrationControllerAgence@register')->name('registerAgence.submit');