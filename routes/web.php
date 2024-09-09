<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/',[StudentController::class,'index'])->name('Crud.index');
Route::get('/create',[StudentController::class,'create'])->name('Crud.create');
Route::post('/store',[StudentController::class,'store'])->name('Crud.store');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('Crud.edit');
Route::patch('/update/{student}',[StudentController::class,'update'])->name('Crud.update');
Route::get('/delete/{id}', [StudentController::class, 'delete'])->name('Crud.delete');