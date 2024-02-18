<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Livewire\Backend\Category\AddCategory;
use App\Livewire\Backend\Category\Categories;
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

Route::get('/', [UserController::class,'index'])->name('home');
Route::get('/{category:slug}/{product:slug}',[UserController::class,'productDetails'])->name('product.details');
Route::get('/cart',[UserController::class,'cart'])->name('cart');
Route::get('/checkout',[UserController::class,'checkout'])->name('checkout');
Route::get('/thank-you',[UserController::class,'thankYou'])->name('thank-you');
Route::get('/shop',[UserController::class,'shop'])->name('shop');




Route::prefix('admin')->group(function () {
    Route::get('/products/index',[ProductController::class,'index'])->name('products');
    Route::get('/products/{product:slug}/delete', [ProductController::class,'destroy'])->name('product.destroy');
    Route::get('/products/{product:slug}/edit', UpdateProduct::class)->name('product.edit');//livewire
    Route::get('/products/create', CreateProduct::class)->name('product.create');//livewire
    Route::get('/categories/index', AddCategory::class)->name('product.categories');
    Route::get('/categories/{category}/delete', [Categories::class,'deleteCategory'])->name('category.destroy');
});
Route::prefix('admin')->group(function () {
    Route::get('/orders',[OrderController::class,'index'])->name('orders');
    Route::get('/orders/{order:reference}',[OrderController::class,'details'])->name('order.details');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
