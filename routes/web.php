<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Product2Controller;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
Route::get('/collection', [PagesController::class, 'collection'])->name('collection');
Route::post('/cart/store', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart', [CartController::class, 'show'])->name('cart.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/admin/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


//     Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
// Route::post('/cart/{id}', [CartController::class, 'add'])->name('cart.add');
// Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');



});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });

     // Product Routes
     Route::resource('products', Product2Controller::class);

     // Category Routes
     Route::resource('categories', CategoryController::class);
 
     // Order Routes
     Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
     Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');
     Route::patch('orders/{order}', [OrderController::class, 'update'])->name('orders.update');
 
});





require __DIR__.'/auth.php';
