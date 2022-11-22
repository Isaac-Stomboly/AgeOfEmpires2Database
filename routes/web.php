<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpiresController;

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

Route::get('/', [EmpiresController::class, 'index']);
Route::get('/update', [EmpiresController::class, 'update']);
Route::post('/update/edit', [EmpiresController::class, 'edit']);
Route::post('/update/add', [EmpiresController::class, 'add']);
Route::get('/delete', [EmpiresController::class, 'delete']);
Route::post('/delete/destroy', [EmpiresController::class, 'deleteFinal']);