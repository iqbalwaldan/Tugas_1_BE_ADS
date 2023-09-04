<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReporterController;
use App\Http\Controllers\ReportTrackerController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login',[LoginController::class, 'authenticate']);
// Route::get('/logout',[LoginController::class, 'logout']);

// Route::get('/dashboard', fn()=> view('/dashboard.index'))->middleware(['auth']);
Route::get('/reporter', [ReporterController::class, 'index']);
Route::post('/reporter',[ReporterController::class, 'store']);
Route::get('/dashboard/reporter/{id}', [ReporterController::class, 'show'])->middleware(['auth']);

Route::resource('/dashboard/report', ReportController::class)->middleware('auth');
Route::get('/dashboard/report-tracker', [ReportTrackerController::class, 'index'])->middleware('auth');
// Route::resource('/dashboard', DashboardController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard/report/{report}/log', [ReportController::class, 'log'])->name('report.log');