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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{slug}', [App\Http\Controllers\HomeController::class, 'company'])->name('company');

Route::group(['middleware' => ['auth']], function () {
    Route::get('spu/create', [SpuController::class, 'create'])->name('spu.create');
    Route::post('spu', [SpuController::class, 'store'])->name('spu.store');
    Route::get('spu/{spu}/edit', [SpuController::class, 'edit'])->name('spu.edit');
    Route::put('spu/{spu}', [SpuController::class, 'update'])->name('spu.update');
});

Route::get('/{slug}/{spu_id}', [AppointmentController::class, 'create'])->name('appointment.create');
Route::post('/{slug}/{spu_id}', [AppointmentController::class, 'store'])->name('appointment.store');
