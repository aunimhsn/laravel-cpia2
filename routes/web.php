<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobOfferController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/job_offers', [JobOfferController::class, 'index'])->name('job_offers.index');
Route::get('/job_offers/{id}', [JobOfferController::class, 'show'])->name('job_offers.show');
