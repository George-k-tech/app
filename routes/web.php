<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
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

//all application routes generally
Route::get('/', [ShopController::class, 'index'])->name('shop.index');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::delete('/delete-cart-product', [CartController::class, 'deleteProduct'])->name('delete.cart.product');
Route::patch('/update-cart-product', [CartController::class, 'updateProduct'])->name('update.cart');

//application routes for authorized users

Route::middleware('auth')->group(function () {
    Route::get('/cart-order-store', [CartController::class, 'storeProduct'])->name('cart.store');
    Route::get('/cart-show', [CartController::class, 'showProduct'])->name('cart.show');
});


//application routes to create and authorize new users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//admin routes
Route::middleware('auth', 'role:admin')->group(function(){
    Route::get('/admin', [AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/product',[ProductController::class,'index'])->name('product.index');
    Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/{product_id}/delete', [ProductController::class, 'destroy'])->name('product.delete');

    Route::get('/category',[CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create',[CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/{category_id}/delete', [CategoryController::class, 'destroy'])->name('category.delete');

    Route::get('/order', [OrdersController::class, 'index'])->name('order.index');
});


require __DIR__ . '/auth.php';
