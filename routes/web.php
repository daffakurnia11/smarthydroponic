<?php

use App\Http\Controllers\Admin\PumpController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);

Route::post('/pumpcontrol', [PumpController::class, 'pumpcontrol']);
Route::post('/datainsert', [PumpController::class, 'datainsert']);
Route::get('/datacontrol', [PumpController::class, 'datacontrol']);

Route::middleware('guest')->group(function () {
  Route::get('/login', [AdminController::class, 'login'])->name('login');
  Route::post('/login', [AdminController::class, 'authentication']);
});

Route::middleware('auth')->group(function () {
  Route::post('/logout', [AdminController::class, 'logout']);
  Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::prefix('/monitoring')->group(function () {
      Route::get('/hydroponic', [AdminController::class, 'hydroponic']);
      Route::get('/solar-tracker', [AdminController::class, 'solar_tracker']);
    });
  });
});
