<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\SquareController;
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
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

// FullCalendar
Route::get('calendar', [CalendarController::class, 'index']);
Route::get('get_events', [CalendarController::class, 'getEvents']);

// Square
Route::get('square', [SquareController::class, 'index']);
Route::post('square/createPayment', [SquareController::class, 'createPayment'])->name('square.createPayment');
