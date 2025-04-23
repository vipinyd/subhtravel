<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/about-us', [HomeController::class, 'aboutUs']);
Route::get('/contact-us', [HomeController::class, 'contactUs']);
Route::get('/tour-details-chardham', [HomeController::class, 'TourDetailsCharDham'])->name('tour-details-chardham');
Route::get('/tour-details-prayagraj', [HomeController::class, 'TourDetailsPrayagraj'])->name('tour-details-prayagraj');
Route::get('/tour-details-varanasi', [HomeController::class, 'TourDetailsVaranasi'])->name('tour-details-varanasi');
Route::get('/tour-details-ayodhya', [HomeController::class, 'TourDetailsAyodhya'])->name('tour-details-ayodhya');