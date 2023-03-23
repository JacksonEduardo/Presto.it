<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RevisorController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/categoria/{category}', [PublicController::class, 'categoryShow'])->name('category.show');

// RICERCA ANNUNCIO
Route::get('/ricerca/prodotto', [PublicController::class, 'searchProducts'])->name('products.search');

// ROTTE PRODUCT
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');

// ROTTE REVISOR PROTETTE DA MIDDLEWARE
Route::get('/revisor/home',[RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');

// ACCETTA PRODOTTO PROTETTO DA MIDDLEWARE
Route::patch('/accetta/product/{product}', [RevisorController::class, 'acceptProduct'])->middleware('isRevisor')->name('revisor.accept_product');

// RIFIUTA PRODOTTO PROTETTO DA MIDDLEWARE
Route::patch('/rifiuta/product/{product}', [RevisorController::class, 'rejectProduct'])->middleware('isRevisor')->name('revisor.reject_product');

// RICHIESTA REVISORE
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

// CONFERMA RUOLO REVISORE
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');


