<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\AuthApiController;
use App\Http\Controllers\v1\ControlFormInputApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('v1/login', [AuthApiController::class, 'login']);
Route::post('v1/register', [AuthApiController::class, 'register']);

Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
    Route::post('control_ui', [ControlFormInputApiController::class, 'controlUi']);
});
