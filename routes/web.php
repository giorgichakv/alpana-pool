<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pool', [App\Http\Controllers\HomeController::class, 'pool'])->name('pool');


use App\Http\Controllers\VisitorController;
use App\Http\Middleware\LogVisitor;

Route::get('/admin/visitors', [VisitorController::class, 'index'])
    ->middleware(LogVisitor::class);


use App\Http\Controllers\BlogController;

Route::resource('blogs', BlogController::class);
Route::get('/pool', [BlogController::class, 'pool'])->name('pool');
Route::get('/news', [BlogController::class, 'news'])->name('news');
Route::get('/services', [BlogController::class, 'services'])->name('services');


  use App\Http\Controllers\Admin\ProductController;

Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/admin/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/admin/products', [ProductController::class, 'index'])->name('product.index');
Route::delete('/admin/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');


use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopController;

Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::post('/cart/add/{product}', [OrderController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove/{product}', [OrderController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/cart', [OrderController::class, 'cart'])->name('cart.index');

Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [OrderController::class, 'store'])->name('order.store');

use App\Http\Controllers\GalleryController;

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
