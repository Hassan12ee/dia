<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\services\DiabtesRecordController;
use App\Http\Controllers\services\ExcercisesController;
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
define('PAGINATION_COUNT', 10);

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/test', [App\Http\Controllers\services\DiabtesRecord::class,  'create'])->name('test');
// Route::post('/test/store{id}', [App\Http\Controllers\services\DiabtesRecord::class,'store'])->name('create');

// Route::get('/admin/hotels/view',[App\Http\Controllers\services\DiabtesRecord::class,'show']);
// Route::get('/admin/hotels/update/{record_id}',[App\Http\Controllers\services\DiabtesRecord::class,'edit']);
// Route::put('/admin/hotels/update/done/{record_id}',[App\Http\Controllers\services\DiabtesRecord::class,'Update']);

