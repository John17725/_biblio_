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
Route::get('/', [BookController::class,'home']);

Route::get('libros/', [BookController::class,'index'])->name('libros.index');
Route::get('registrar-libro/', [BookController::class,'RegisterrBook'])->name('libros.new');
Route::post('/saveBook', [BookController::class,'saveBook'])->name('libro.save');


Route::get('estudiante/', [StudentController::class, 'index'])->name('estudiante.index');
Route::get('registrar-estudiante/', [StudentController::class, 'registerstudent'])->name('estudiante.new');
Route::post('/saveStudent', [StudentController::class, 'store'])->name('estudiante.save');


Route::get('prestamos/', [LendsController::class, 'index'])->name('prestamos.index');
Route::get('realizar-prestamo/', [LendsController::class, 'registerlend'])->name('prestamos.new');
Route::get('/getStudentDataLend', [LendsController::class, 'getdatastudentlend'])->name('prestamos.get.datastudent');

Route::get('/getBookDataLend', [LendsController::class, 'getbookdatalend'])->name('prestamos.get.databook');
Route::post('/newLend', [LendsController::class, 'storenewlend'])->name('prestamos.new.lend');
Route::get('devolver-libro/{id}', [LendsController::class, 'returnBook'])->name('prestamos.return.lend');

Route::post('/buscar-prestamo', [LendsController::class, 'findlend'])->name('prestamos.find.lend');

