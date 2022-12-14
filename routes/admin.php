<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\ContractController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\GlosaryController;
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\admin\NotificationController;




Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::get('documentacion-app-gesccol', [HomeController::class, 'docs'])->name('admin.docs');

// 'ruta/{variable} => nombre iguales'
Route::resource('categories', CategoryController::class)->names('admin.categorias');

Route::resource('posts', PostController::class)->names('admin.posts');

Route::resource('services', ServiceController::class)->names('admin.servicios'); 

Route::resource('contracts', ContractController::class)->names('admin.contratos');

Route::resource('orders', OrderController::class)->names('admin.ordenes');

Route::resource('glosario', GlosaryController::class)->names('admin.glosario');

Route::resource('reportes', ReportController::class)->names('admin.reportes');

Route::resource('notification', NotificationController::class)->names('admin.notificaciones');

