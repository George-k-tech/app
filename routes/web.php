<?php

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

Route::get('/', function () {
    return view('welcome');
});


/* Route::middleware(['auth', 'verified', 'role:admin']) ->group(function (){
Route::get('/product',[ProductController::class, 'index'])->name('product.index');
Route::get('/product/create',[ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class,'store'])->name('product.store');
Route::get('/product', [ProductController::class,'edit'])->name('product.edit');
Route::post('/product/{id}', [ProductController::class,'update'])->name('product.update');
}); */

Route::middleware(['auth', 'verified']) ->group(function (){
    Route::get('/shop',[ShopController::class, 'index'])->name('shop.index');
    Route::get('/shop/{slug}', [ShopController::class, 'show'])->name('shop.show');
    });

/* Route::resource('/shop', ShopController::class)->middleware(['auth', 'verified']); */

Route::resource('/product', ProductController::class)->middleware(['auth', 'verified', 'role:admin']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
