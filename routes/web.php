<?php

use App\Exports\SensorExport;
use App\Exports\UsersExport;
use App\Http\Controllers\Admin\PumpController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\LoggerController;
use App\Http\Controllers\Admin\PlantController;
use App\Http\Controllers\Logger\HydroponicController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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
Route::get('/monitoring', [PagesController::class, 'monitoring']);
Route::get('/article', [PagesController::class, 'article']);

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
    Route::post('/control_update/{control}', [AdminController::class, 'control_update']);
    Route::get('/control_reset', [AdminController::class, 'control_reset']);

    Route::prefix('/monitoring')->group(function () {
      Route::get('/hydroponic', [AdminController::class, 'hydroponic']);
      Route::get('/solar-tracker', [AdminController::class, 'solar_tracker']);
    });
    Route::prefix('/log')->group(function () {
      Route::get('/hydroponic', [LoggerController::class, 'hydroponic']);
      Route::get('/solar-tracker', [LoggerController::class, 'solar_tracker']);
    });
    Route::prefix('/export')->group(function () {
      Route::get('/hydroponic', [ExportController::class, 'hydroponic']);
      Route::get('/solar-tracker', [ExportController::class, 'solar_tracker']);
    });
    Route::prefix('/export-all')->group(function () {
      Route::get('/hydroponic', [ExportController::class, 'all_hydroponic']);
      Route::get('/solar-tracker', [ExportController::class, 'all_solar_tracker']);
    });
    Route::resource('article', ArticleController::class)->except('show');

    Route::resource('plant', PlantController::class)->except('show');
  });
});

Route::get('/{article}', [ArticleController::class, 'show']);
