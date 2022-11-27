<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApptController;
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

Route::controller(ApptController::class)->group(function () {
    Route::get('/appt', 'index');
});

Route::controller(ApptController::class)->group(function () {
    Route::any('/appt/index2', 'index2');
});

Route::controller(ApptController::class)->group(function () {
    Route::any('/appt/select', 'select');
});

Route::controller(ApptController::class)->group(function () {
    Route::any('/appt/showcal', 'showcal');
});

Route::controller(ApptController::class)->group(function () {
    Route::any('/appt/selhour/{data}', 'selhour');
});

Route::controller(ApptController::class)->group(function () {
    Route::get('/appt/create', 'create');
});

Route::controller(ApptController::class)->group(function () {
    Route::post('/appt/create', 'store');
});
