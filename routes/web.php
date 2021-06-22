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

    Route::get('admin/logout', function (){
        \Illuminate\Support\Facades\Auth::logout();
        return redirect()->route('login');
    })->name('logout');

    Route::get('admin/contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');

    Route::get('admin/project', 'App\Http\Controllers\ProjectController@index')->name('project.index');
    Route::get('admin/project/create', 'App\Http\Controllers\ProjectController@create')->name('project.create');
    Route::post('admin/project/store', 'App\Http\Controllers\ProjectController@store')->name('project.store');
});

