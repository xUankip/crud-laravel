<?php

use App\Http\Controllers;
use App\Http\Controllers\UserController;
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
Route::get('/users/create', [UserController::class, 'create']);

Route::post('/users/create', [UserController::class, 'save']);

Route::get('/users/edit', [UserController::class, 'edit']);

Route::post('/users/edit', [UserController::class, 'update']);

Route::get('/users/index', [UserController::class, 'index']);
