<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\VacCenterController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\VacStatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('user', [AuthController::class, 'user']);
    Route::post('admin', [AuthController::class, 'admin']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:admin-api', 'scope:admin'])->group(function () {
    Route::prefix('vac-center')->group(function () {
        Route::get('', [VacCenterController::class, 'all']);
        Route::get('{id}/stocks', [VacCenterController::class, 'stocks']);
        Route::get('{id}/schedules', [VacCenterController::class, 'schedules']);
        Route::post('', [VacCenterController::class, 'create']);
        Route::post('{id}', [VacCenterController::class, 'update']);
        Route::delete('{id}', [VacCenterController::class, 'delete']);
    });

    Route::prefix('vaccine')->group(function () {
        Route::get('', [VaccineController::class, 'all']);
        Route::post('', [VaccineController::class, 'create']);
        Route::post('{id}', [VaccineController::class, 'update']);
        Route::delete('{id}', [VaccineController::class, 'delete']);
    });

    Route::prefix('stock')->group(function () {
        Route::get('', [StockController::class, 'all']);
        Route::post('', [StockController::class, 'create']);
        Route::post('{id}', [StockController::class, 'update']);
        Route::delete('{id}', [StockController::class, 'delete']);
    });

    Route::prefix('schedule')->group(function () {
        Route::get('', [ScheduleController::class, 'all']);
        Route::post('', [ScheduleController::class, 'create']);
        Route::post('{id}', [ScheduleController::class, 'update']);
        Route::delete('{id}', [ScheduleController::class, 'delete']);
    });

    Route::prefix('status')->group(function () {
        Route::get('', [VacStatusController::class, 'all']);
        Route::post('', [VacStatusController::class, 'create']);
        Route::post('{id}', [VacStatusController::class, 'update']);
        Route::delete('{id}', [VacStatusController::class, 'delete']);
    });
});
