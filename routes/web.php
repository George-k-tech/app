<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerDetailController;
use App\Http\Controllers\HeaderController;
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
Route::get('shop/{category_slug}', [ShopController::class, 'show'])->name('shop.show');
Route::get('shop/{category_slug}/{product_slug}', [ProductController::class, 'show'])->name('product.show');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::delete('/delete-cart-product', [CartController::class, 'deleteProduct'])->name('delete.cart.product');
Route::patch('/update-cart-product', [CartController::class, 'updateProduct'])->name('update.cart');


//application routes for authorized users

Route::middleware('auth')->group(function () {
    Route::get('/cart-order-store', [CartController::class, 'storeProduct'])->name('cart.store');
    Route::get('/cart-show', [CartController::class, 'showProduct'])->name('cart.show');
    Route::get('/customer-detail-create', [CustomerDetailController::class, 'create'])->name('customer.create');
    Route::post('/customer-detail-store', [CustomerDetailController::class, 'store'])->name('customer.store');
    Route::get('/customer-detail-index/{customer}', [CustomerDetailController::class, 'index'])->name('customer.index');
    Route::get('/customer-detail-edit/{customer}/edit', [CustomerDetailController::class, 'edit'])->name('customer.edit');
    Route::put('/customer-detail-update/{customer_id}', [CustomerDetailController::class, 'update'])->name('customer.update');
});


//application routes to create and authorize new users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//admin routes
Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/{product_id}/delete', [ProductController::class, 'destroy'])->name('product.delete');

    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/{category_id}/delete', [CategoryController::class, 'destroy'])->name('category.delete');

    Route::get('/order', [OrdersController::class, 'index'])->name('order.index');
    Route::get('/order/{customer}', [OrdersController::class, 'detail'])->name('order.view');

    Route::get('/header', [HeaderController::class, 'index'])->name('header.index');
    Route::get('/header/create', [HeaderController::class, 'create'])->name('header.create');
    Route::post('/header/store', [HeaderController::class, 'store'])->name('header.store');
});


require __DIR__ . '/auth.php';
