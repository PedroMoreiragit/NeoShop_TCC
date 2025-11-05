<?php


use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Store\StoreController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;





//  E-commerce


// Home
Route::get('/', [StoreController::class, 'store'])->name('home');

// Product
// Route::view('product', 'e-commerce.product')->name('product');

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

    Route::view('dashboard', 'dashboard.home')->name('dashboard');

    Route::get('products', [ProductController::class, 'showProduct'])->name('products');

    Route::get('create-product', [ProductController::class, 'showCreateForm'])->name('create-product');
    Route::post('create-product', [ProductController::class, 'createProduct'])->name('store-product');


    Route::view('orders', 'dashboard.orders')->name('orders');

    Route::view('customers', 'dashboard.customers')->name('customers');

    Route::view('reports', 'dashboard.reports')->name('reports');
// });


require __DIR__ . '/auth.php';
