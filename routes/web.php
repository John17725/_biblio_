<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LendsController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\AssistanceController;
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
Route::post('/newLends', [LendsController::class, 'storenewlends'])->name('prestamos.new.lends');
Route::get('devolver-libro/{id}', [LendsController::class, 'returnBook'])->name('prestamos.return.lend');

Route::post('/buscar-prestamo', [LendsController::class, 'findlend'])->name('prestamos.find.lend');
Route::post('/buscar-prestamo-nombre', [LendsController::class, 'findlendname'])->name('prestamos.find.lend.name');

Route::get('estadisticas', [StatsController::class, 'stats'])->name('biblio.stats');

Route::get('estadisticas-year/{year}', [StatsController::class, 'getDataYear'])->name('biblio.stats.year');


Route::get('registrar-asistencia/', [AssistanceController::class, 'index'])->name('biblio.assistance.new');
Route::post('/guardar-asistencia', [AssistanceController::class, 'save'])->name('biblio.assistance.save');

Route::post('/getdatabook', [BookController::class, 'getdatabook'])->name('libro.data');
Route::post('/getdatabookbarras', [BookController::class, 'getdatabookbarras'])->name('libro.databarras');