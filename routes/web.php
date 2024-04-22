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

Route::get('/registerClient', 'App\Http\Controllers\auth\RegistrationControllerClient@showRegistrationForm')->name('registerClient');
Route::post('/registerClient', 'App\Http\Controllers\auth\RegistrationControllerClient@register')->name('registerClient.submit');

Route::get('/registerAgence', 'App\Http\Controllers\auth\RegistrationControllerAgence@showRegistrationForm')->name('registerAgence');
Route::post('/registerAgence', 'App\Http\Controllers\auth\RegistrationControllerAgence@register')->name('registerAgence.submit');


Route::get('/loginClient', 'App\Http\Controllers\auth\LoginControllerClient@showLoginForm')->name('loginClient');
Route::post('/loginClient', 'App\Http\Controllers\auth\LoginControllerClient@Login')->name('loginClient.submit');

Route::get('/loginAgence', 'App\Http\Controllers\auth\LoginControllerAgence@showLoginForm')->name('loginAgence');
Route::post('/loginAgence', 'App\Http\Controllers\auth\LoginControllerAgence@Login')->name('LoginAgence.submit');

Route::resource('dashboardAgence', 'App\Http\Controllers\DashboardAgenceController');

