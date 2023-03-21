<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;

//Route::get('/', function () { return view('welcome'); });

Route::get('/', [PersonasController::class,'index'])->name('personas.index');
Route::get('/create', [PersonasController::class,'create'])->name('personas.create');
Route::get('/show/{id}', [PersonasController::class,'show'])->name('personas.show');
Route::get('/edit/{id}', [PersonasController::class,'edit'])->name('personas.edit');
Route::put('/update/{id}', [PersonasController::class,'update'])->name('personas.update');
Route::post('/store', [PersonasController::class,'store'])->name('personas.store');
Route::delete('/delete/{id}', [PersonasController::class,'destroy'])->name('personas.destroy');