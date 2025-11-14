<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Store\StoreController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

//  E-commerce


// Home
Route::get('/', [StoreController::class, 'store'])->name('home');

// Product
Route::get('product/{slug}', [StoreController::class, 'viewProduct'])->name('product');

// Search
Route::view('search', 'e-commerce.search')->name('search');

// Cart
Route::view('cart', 'e-commerce.cart')->name('cart');



// Authenticated Sessions

Route::middleware(['auth'])->group(function () {

    // Account
    Route::view('account', 'e-commerce.profile')->name('account');

    // Edit Profile
    Route::view('edit-profile', 'e-commerce.profileEdit')->name('edit-profile');

    // Payment Methods
    Route::view('methods', 'e-commerce.paymentMethods')->name('methods');

    // Orders
    Route::view('orders', 'e-commerce.orders')->name('orders');

    // Client Support
    // Route::view('support', 'e-commerce.')->name('support');

    // Finish Order

    // Finishing
    Route::view('finished', 'e-commerce.finishPurchase')->name('finished');

    // Pix
    Route::view('pix', 'e-commerce.qrCodeFinishPurchase')->name('pix');

    // Ticket
    Route::view('ticket', 'e-commerce.ticketFinishPurchase')->name('ticket');

    // Card
    Route::view('card', 'e-commerce.cardFinishPurchase')->name('card');

    // Success
    Route::view('success', 'e-commerce.successFinishPurchase')->name('success');

});


// Error

Route::view('error', 'e-commerce.error.error')->name('error');


// DashBoard

// Route::middleware(['AdminVerification'])->group(function () {

Route::get('dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
Route::get('/chart/stock', [ChartController::class, 'stock']);
Route::get('/chart/categories', [ChartController::class, 'getCategoryData']);




Route::get('products', [ProductController::class, 'showProduct'])->name('products');

Route::get('create-product', [ProductController::class, 'showCreateForm'])->name('create-product');
Route::post('create-product', [ProductController::class, 'createProduct'])->name('store-product');
Route::get('update-product/{id}', [ProductController::class, 'showUpdateProduct'])->name('update-product');
Route::post('update-product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');
Route::delete('delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');


Route::get('users', [UserController::class, 'showUsers'])->name('users');
Route::get('create-user', [UserController::class, 'showCreateUsers'])->name('create-user');
Route::post('create-user', [UserController::class, 'createUser'])->name('create-user');
Route::get('update-user/{id}', [UserController::class, 'showUpdateUsers'])->name('update-user');
Route::post('update-user/{id}', [UserController::class, 'updateUser'])->name('update-user');
Route::delete('delete-user/{id}', [UserController::class, 'deleteUser'])->name('delete-user');


Route::get('categories', [CategoryController::class, 'showCategories'])->name('categories');
Route::get('create-category', [CategoryController::class, 'showCreateCategory'])->name('create-category');
Route::post('create-category', [CategoryController::class, 'createCategory'])->name('create-category');
Route::get('update-category/{id}', [CategoryController::class, 'showUpdateCategory'])->name('edit-category');
Route::post('update-category/{id}', [CategoryController::class, 'updateCategory'])->name('update-category');
Route::delete('delete-category^/{id}', [CategoryController::class, 'deleteCategory'])->name('delete-category');


Route::view('orders', 'dashboard.orders')->name('orders');

Route::view('reports', 'dashboard.reports')->name('reports');
// });


require __DIR__ . '/auth.php';
