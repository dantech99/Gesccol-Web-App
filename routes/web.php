<?php

use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContractController;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactanosMailable;

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


//ruta pagina principal
// Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');

    //quines somos
    Route::get('quienes-somos', 'whoweare')->name('home.somos');

    //atencion al ciudadano
    Route::get('atencion-al-ciudadano', 'attention')->name('home.atencion');

    //atencion al ciudadano
    Route::post('contactanos', 'store')->name('home.store');

    //glosario de terminos claves
    Route::get('glosario', 'glossary')->name('home.glossary');

    //preguntas frecuentes
    Route::get('preguntas-frecuentes', 'questions')->name('home.questions');

    //normativas y legalidades
    Route::get('normativas', 'regulations')->name('home.regulations');

});

// ruta para las vistas de contrataciones 

Route::controller(ContractController::class)->group(function(){
    Route::get('contrataciones', 'index')->name('contractos.index');

});




Route::controller(PostController::class)->group(function() {
    //ruta para mostrar todos los posts
    Route::get('posts', 'index')->name('posts.index');

    //ruta para ver una entrada
    Route::get('posts/{post:slug}', 'show')->name('posts.show');

    //ruta para ver los posts por categoria
    Route::get('category/{category:slug}', 'category')->name('posts.categoria');
});






Route::controller(ServiceController::class)->group(function(){

    //ruta para ver todos los servicios y procesos
    Route::get('servicios', 'index')->name('servicios.index');

    //ruta para ver un servicio
    Route::get('servicios/{service:slug}', 'show')->name('servicios.show');
});











Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
