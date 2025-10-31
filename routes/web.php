<?php


use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;





//  E-commerce


// Home
Route::view('/', 'e-commerce.home')->name('home');

// Product
Route::view('produto', 'e-commerce.product')->name('produto');

// Search
Route::view('pesquisar', 'e-commerce.search')->name('pesquisar');

// Cart
Route::view('carrinho', 'e-commerce.cart')->name('carrinho');



// Authenticated Sessions

Route::middleware(['auth'])->group(function () {

    // Account
    Route::view('conta', 'e-commerce.profile')->name('conta');

    // Edit Profile
    Route::view('editar conta', 'e-commerce.profileEdit')->name('editar conta');

    // Payment Methods
    Route::view('metodos', 'e-commerce.paymentMethods')->name('metodos');

    // Orders
    Route::view('pedidos', 'e-commerce.orders')->name('pedidos');

    // Client Support
    // Route::view('suporte', 'e-commerce.')->name('suporte');

    // Finish Order

    // Finishing
    Route::view('finalizando', 'e-commerce.finishPurchase')->name('finalizando');

    // Pix
    Route::view('pix', 'e-commerce.qrCodeFinishPurchase')->name('pix');

    // Ticket
    Route::view('boleto', 'e-commerce.ticketFinishPurchase')->name('boleto');

    // Card
    Route::view('cartao', 'e-commerce.cardFinishPurchase')->name('cartao');

    // Success
    Route::view('sucesso', 'e-commerce.successFinishPurchase')->name('sucesso');

});


// Error

Route::view('error', 'e-commerce.error.error')->name('error');




// DashBoard

Route::middleware(['AdminVerification'])->group(function () {
    Route::view('dashboard', 'dashboard.dashboard')->name('dashboard');
    Route::view('products', 'dashboard.products')->name('products');
    Route::view('orders', 'dashboard.orders')->name('orders');
    Route::view('customers', 'dashboard.customers')->name('customers');
    Route::view('reports', 'dashboard.reports')->name('reports');
});


require __DIR__ . '/auth.php';
