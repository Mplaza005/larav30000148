<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\OrmController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;




Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');



Route::get('categories/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::put('category/{category}',[CategoryController::class,'update'])->name('category.update');
Route::delete('category/{category}',[CategoryController::class,'destroy'])->name('category.destroy');
Route::get('curso/{category}/editar',[CategoryController::class,'edit'])->name('category.edit');



















