<?php

use App\Http\Controllers;
use App\Http\Controllers\QuestionController;
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
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::post('/users/create', [UserController::class, 'save']) ->name('users.save');

Route::GET('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');

Route::POST('/users/edit/{id}', [UserController::class, 'update'])->name('users.update');

Route::get('/users', [UserController::class, 'index']) -> name('users.index');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/login', [UserController::class, 'login']) -> name('users.login');
Route::get('/users/register', [UserController::class, 'register']) -> name('users.register');
Route::get('/questions', [QuestionController::class, 'index']);
Route::get('/create', [UserController::class, 'create_quiz']) -> name('users.create_quiz');
Route::get('/ingame',[QuestionController::class, 'questionInGame']) -> name('questions.questionInGame');
Route::get('/', [UserController::class, 'home']) -> name('users.home');
Route::get('/questions/list', [QuestionController::class, 'questionList']) -> name('questions.question-list');
