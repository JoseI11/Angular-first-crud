<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilotController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/pilots', [PilotController::class, 'index']);
Route::post('/pilots', [PilotController::class, 'store']);
Route::get('/pilots/{id}', [PilotController::class, 'show']);
Route::put('/pilots/{id}', [PilotController::class, 'update']);
Route::delete('/pilots/{id}', [PilotController::class, 'delete']);