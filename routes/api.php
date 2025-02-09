<?php

use App\Http\Controllers\Api\DiabtesRecord;
use App\Http\Controllers\Api\DiabtesRecordController as ApiDiabtesRecordController;
use App\Http\Controllers\services\DiabtesRecordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ExcercisesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/records', [DiabtesRecord::class, 'index']);
Route::get('/record/{id}', [DiabtesRecord::class, 'show']);
Route::get('/Excercises/{id}', [ExcercisesController::class, 'show']);
Route::get('/records/{id}', [DiabtesRecord::class, 'showhistory']);


Route::post('/records', [DiabtesRecord::class,'store']);
Route::post('/records/{id}', [DiabtesRecord::class, 'update']);
Route::delete('/records/{id}',[DiabtesRecord::class,'destroy']);




Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});

