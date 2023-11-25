<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/inicio', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');

       //  categories
    Route::controller(\App\Http\Controllers\CategoryController::class)->group(function (){
        Route::get('/categorias', 'index')->name('category.index');
        Route::get('/categoria/crear', 'create')->name('category.create');
        Route::get('/categoria/{category}/editar', 'edit')->name('category.dit');
        Route::post('/categoria', 'store')->name('category.store');
        Route::put('/categoria/{category}', 'update')->name('category.update');
        Route::delete('/categoria/{category}', 'destroy')->name('category.delete');
    });

    //  products
    Route::controller(\App\Http\Controllers\ProductController::class)->group(function (){
        Route::get('/productos', 'index')->name('product.index');
        Route::get('/producto/crear', 'create')->name('product.create');
        Route::get('/producto/{product}/editar', 'edit')->name('product.dit');
        Route::post('/producto', 'store')->name('product.store');
        Route::put('/producto/{product}', 'update')->name('product.update');
        Route::delete('/producto/{product}', 'destroy')->name('product.delete');
    });

    //  dayly books
    Route::controller(\App\Http\Controllers\DaylyBookController::class)->group(function (){
        Route::get('/libro-diarios', 'index')->name('daylybook.index');
        Route::get('/libro-diario/crear', 'create')->name('daylybook.create');
        Route::get('/libro-diario/{daylybook}/editar', 'edit')->name('daylybook.dit');
        Route::post('/libro-diario', 'store')->name('daylybook.store');
        Route::put('/libro-diario/{daylybook}', 'update')->name('daylybook.update');
        Route::delete('/libro-diario/{daylybook}', 'destroy')->name('daylybook.delete');
    });
});

require __DIR__.'/auth.php';
