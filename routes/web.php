<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MentionsLegalesController;
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

Route::get('/',[HomeController::class, 'index'])->name('home');


Route::get('/hello/{name}', [HelloController::class, 'index'])->name('hello');


Route::get('/menu', [Menucontroller::class, 'index'])->name('menu');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');


Route::get('/mentions-legales', [MentionsLegalesController::class, 'index'])->name('mentions-legales');
