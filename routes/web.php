<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\SpuController;
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

Route::redirect('home', 'admin');

Auth::routes();

//Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.show');
//Route::get('/appointment/{appointment}', [AppointmentController::class, 'show'])->name('appointment.show');
Route::view('/create-appointment', 'pages.create_appointment')->name('create-appointment ');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::view('/', 'pages.admin.dashboard')->name('home');
    Route::view('/appointment', 'pages.admin.appointment')->name('appointment');
    Route::view('/schedule', 'pages.admin.schedule')->name('schedule');

//    Route::get('/', [HomeController::class, 'index'])->name('home');
//    Route::get('/schedule', [HomeController::class, 'schedule'])->name('schedule');
    Route::get('spu/create', [SpuController::class, 'create'])->name('spu.create');
    Route::post('spu', [SpuController::class, 'store'])->name('spu.store');
    Route::get('spu/{spu}/edit', [SpuController::class, 'edit'])->name('spu.edit');
    Route::put('spu/{spu}', [SpuController::class, 'update'])->name('spu.update');
});

Route::get('{slug}', [AppointmentController::class, 'index'])->name('appointment.index');
Route::get('{slug}/{spu_id}', [AppointmentController::class, 'create'])->name('appointment.create');
Route::post('{slug}/{spu_id}', [AppointmentController::class, 'store'])->name('appointment.store');
