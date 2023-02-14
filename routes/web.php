<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');
    Route::post('/todos', [TodoController::class, 'store'])->name('todo.store');
    Route::get('/todos/create', [TodoController::class, 'create'])->name('todo.create');
    Route::get('/todos/{id}/edit', [TodoController::class, 'edit'])->name('todo.edit');
    Route::put('/todos/{id}/update', [TodoController::class, 'update'])->name('todo.update');
});