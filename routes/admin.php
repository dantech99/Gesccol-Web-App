<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controller\Admin\CategoryController;
use App\Http\Controller\Admin\PostController;
use App\Http\Controller\Admin\ServiceController;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

// Route::resource('categories', CategoryController::class)->name('admin.categorias');

// Route::resource('posts', PostController::class)->name('admin.posts');

// Route::resource('services', Service::class)->name('admin.servicios');