<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\ContractController;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('categories', CategoryController::class)->names('admin.categorias');

Route::resource('posts', PostController::class)->names('admin.posts');

Route::resource('services', ServiceController::class)->names('admin.servicios'); 

Route::resource('contracts', ContractController::class)->names('admin.contratos');