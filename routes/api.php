<?php

use App\Http\Controllers\Api\DiabtesRecord;
use App\Http\Controllers\Api\DiabtesRecordController as ApiDiabtesRecordController;
use App\Http\Controllers\services\DiabtesRecordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ExcercisesController;
use app\http\Controllers\Api\DiabetesTypeController;
use App\Http\Controllers\Api\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::middleware(['jwt.verify'])->group(function () {
Route::get('/Excercises/{id}', [ExcercisesController::class, 'show']);
Route::post('/predict_diabetes_type', [DiabetesTypeController::class,'getPrediction']);
Route::controller(DiabtesRecord::class)->group(function ()   {
Route::get('/records/{id}','showhistory');
Route::get('/records','index');
Route::get('/record/{id}','show');
Route::post('/records','store');
Route::post('/records/{id}','update');
Route::delete('/records/{id}','destroy');
Route::post('/predictions', 'getPrediction');
});
Route::controller(UserController::class)->group(function ()   {
Route::get('/User/{id}','show');
Route::put('/User','update');
});
});


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

