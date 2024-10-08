<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController:: class, 'index'])->name('home');
Route::get('/orario-treni', [PageController:: class, 'timetable'])->name('timetable');
Route::get('/pacchetti-vacanze', [PageController:: class, 'vacation_plan'])->name('vacation_plan');
