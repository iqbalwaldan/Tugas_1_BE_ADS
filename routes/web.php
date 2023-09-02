<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReporterController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::get('/logout',[LoginController::class, 'logout']);

Route::get('/dashboard', fn()=> view('/dashboard.index'))->middleware(['auth']);
Route::get('/report', [ReporterController::class, 'index'])->middleware(['guest']);
Route::post('/report',[ReporterController::class, 'store'])->middleware(['guest']);


// Route::resource('/dashboard', DashboardController::class)->middleware('auth');