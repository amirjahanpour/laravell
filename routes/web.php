<?php

use App\Http\Controllers\AdminController;
use App\Models\cities;
use App\Models\provinces;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewApiController;
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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/create', [AdminController::class, 'create'])->middleware('auth');
    Route::post('/create', [AdminController::class, 'received']);
    Route::get('/', [AdminController::class, 'index']);
    Route::get('download/{id}', [AdminController::class, 'donlwodimg']);
    Route::get('/delete/{id}', [AdminController::class, 'index']);
    Route::delete('/delete/{id}', [AdminController::class, 'delete']);
    Route::get('/update/{id}', [AdminController::class, 'edit']);
    Route::put('/update/{id}', [AdminController::class, 'update']);
});
Route::post('/api/Information', [NewApiController::class, 'index']);


