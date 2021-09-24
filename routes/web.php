<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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
    return view('auth.login');
});

    // Admin APIS FORGET PASS
    
    Route::get('/forget-password', function () {
        return view('auth.forget-password');
    });

Route::group(['middleware' => 'auth'], function () {

    // Admin APIS AUTH

    Route::get('/logout', [App\Http\Controllers\Auth\UsersController::class, 'logout'])->name('logout');
    Route::post('/logout', [App\Http\Controllers\Auth\UsersController::class, 'logout']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/admin-profile', [App\Http\Controllers\AdminController::class, 'adminp']);
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);


});

Route::get('/login', [App\Http\Controllers\Auth\UsersController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\UsersController::class, 'login']);
