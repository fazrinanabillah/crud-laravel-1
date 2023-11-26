<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
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

Route::get('/', [StudentsController::class, 'index'])->name('students');
Route::get('/add', [StudentsController::class, 'add'])->name('add');
Route::post('/insert', [StudentsController::class, 'insert'])->name('insert');
Route::get('/{id}', [StudentsController::class, 'getById'])->name('getById');
Route::post('/update/{id}', [StudentsController::class, 'update'])->name('update');
Route::get('/delete/{id}', [StudentsController::class, 'delete'])->name('delete');

