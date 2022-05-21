<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LendsController;
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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [BookController::class,'home']);

Route::get('libros/', [BookController::class,'index']);
Route::get('usuarios/', [StudentController::class, 'index']);
Route::get('prestamos/', [LendsController::class, 'index']);
Route::get('registrar-libro/', [BookController::class,'RegisterrBook']);
Route::post('/saveBook', [BookController::class,'saveBook']);

