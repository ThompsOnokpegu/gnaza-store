<?php

use App\Livewire\CreateAttribute;
use App\Livewire\CreateProduct;
use App\Livewire\AddProduct;
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

Route::get('/products', CreateProduct::class)->name('products');
Route::get('/attributes', CreateAttribute::class)->name('attributes');
Route::get('/add', AddProduct::class )->name('add');

