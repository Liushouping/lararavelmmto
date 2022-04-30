<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnemailsController;
use App\Http\Controllers\TwomailsController;
use App\Models\Oneamil;
use App\Models\Twomail;

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

Route::get('/700', function () {
    return view('M700');
});

Route::get('/199', function () {
    return view('M199');
});

Route::post('/onemail', [OnemailsController::class, 'store'])->name('onemail.store');

Route::post('/Twomail', [TwomailsController::class, 'store'])->name('twomail.store');

