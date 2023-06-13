<?php

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

Route::get('/', function () {
    return view('welcome');
});
/*

Route::get('/crear',[App\Http\Controllers\proyController::class,'index']);

Route::get('/crear',[App\Http\Controllers\proyController::class,'crear']);

Route::get('/mostrar',[App\Http\Controllers\proyController::class,'mostrar']);

Route::get('/editar',[App\Http\Controllers\proyController::class,'editar']);


Route::post('/crear/formulario',[App\Http\Controllers\proyController::class,'formulario'])->Nombre('nom.dataform');
*/

Route::get('/', [App\Http\Controllers\proyController::class, 'index'])->name('proyecto.index');
Route::get('/create', [App\Http\Controllers\proyController::class, 'create'])->name('proyecto.create');
Route::post('/store', [App\Http\Controllers\proyController::class, 'store'])->name('proyecto.store');
Route::get('/edit/{id}', [App\Http\Controllers\proyController::class, 'edit'])->name('proyecto.edit');
Route::put('/update/{id}', [App\Http\Controllers\proyController::class, 'update'])->name('proyecto.update');
Route::get('/show/{id}', [App\Http\Controllers\proyController::class, 'show'])->name('proyecto.show');
Route::delete('/destroy/{id}', [App\Http\Controllers\proyController::class, 'destroy'])->name('proyecto.destroy');