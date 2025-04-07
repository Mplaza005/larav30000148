<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\OrmController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;




Route::get('/formularioProducto',[ProductController::class,'create']);
Route::post('/crearProducto',[ProductController::class,'store'])->name('product.store');



Route::get('ormconsultas',[OrmController::class,'consultas']);




Route::get('cursos/listar',[CourseController::class,'listar'])->name('course.listar');

Route::get('/formularioCurso',[CourseController::class,'create']);
Route::post('/crearCurso',[CourseController::class,'store'])->name('course.store');

Route::get('curso/{curso}',[CourseController::class,'show'])->name('curso.show');

Route::put('curso/{curso}',[CourseController::class,'update'])->name('curso.update');

Route::delete('curso/{curso}',[CourseController::class,'destroy'])->name('curso.destroy');

Route::get('curso/{curso}/editar',[CourseController::class,'edit'])->name('curso.edit');


















