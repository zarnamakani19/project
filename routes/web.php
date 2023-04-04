<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PropertiController;
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

Route::get('/', [LandingController::class,'Home'])->name('home');
Route::get('/login', [LandingController::class,'Login'])->name('login');
Route::post('/login', [LandingController::class,'Login'])->name('login');
Route::get('/signup', [LandingController::class,'signup'])->name('signup');
Route::post('/signup', [LandingController::class,'signup'])->name('signup');
Route::post('/logout', [LandingController::class,'Logout'])->name('logout');
Route::get('/propertidetail/{id}', [LandingController::class,'PropertiDetail'])->name('propertidetail');
Route::get('/contact', [LandingController::class,'Contact'])->name('contact');
Route::get('/submit', [LandingController::class,'Submit'])->name('submit');

Route::post('/requests', [LandingController::class,'requestA'])->name('requests');


//Admin

Route::get('/admin', [AdminController::class,'Home'])->name('admin');
Route::get('/logout', [AdminController::class,'logout'])->name('logout');
Route::delete('/admin/delete/{id}', [PropertiController::class,'DeletePro'])->name('deletepro');

Route::get('/admin/addproperti', [PropertiController::class,'Addproperti'])->name('addproperti');
Route::post('/admin/addproperti', [PropertiController::class,'Addproperti'])->name('addproperti');
Route::get('/admin/viewproperti', [PropertiController::class,'Viewproperti'])->name('viewproperti');
