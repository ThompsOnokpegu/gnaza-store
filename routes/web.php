<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Livewire\Backend\Product\CreateProduct;
use App\Livewire\Backend\Product\UpdateProduct;
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
    return view('backend.index');
});
Route::prefix('admin')->group(function () {
    Route::get('/products',[ProductController::class,'index'])->name('products');
    Route::get('/product/{product:slug}/delete', [ProductController::class,'destroy'])->name('product.destroy');
    Route::get('/product/{product:slug}/edit', UpdateProduct::class)->name('product.edit');//livewire
    Route::get('/product/create', CreateProduct::class)->name('product.create');//livewire
});
Route::prefix('admin')->group(function () {
    Route::get('/orders',[OrderController::class,'index'])->name('orders');
    Route::get('/orders/{order:reference}',[OrderController::class,'details'])->name('order.details');
});



