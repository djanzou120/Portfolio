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

Route::post('contact/create', 'App\Http\Controllers\ContactController@create')->name('contact.create');


/**
 * Authentification Part
 */
//Login
Route::get('/admin/login', 'App\Http\Controllers\Auth\LoginController@index')->name('login');
Route::post('/admin/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login.process');

//Forgot Password
Route::get('/admin/forgot_password', 'App\Http\Controllers\Auth\ForgotPasswordController@index')->name('forgot_password');
Route::post('/admin/forgot_password', 'App\Http\Controllers\Auth\ForgotPasswordController@forgot_password')->name('forgot_password.process');

Route::middleware(['auth'])->group(function (){
    Route::get('/admin/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

    Route::get('/logout', function (){
        \Illuminate\Support\Facades\Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});

