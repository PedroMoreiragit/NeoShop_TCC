<?php


use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| E-commerce
|--------------------------------------------------------------------------
*/

// Home
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});


//produto
Route::get('produto', function () {
    return view('/e-commerce/product');
});

//pesquisar
Route::get('pesquisar', function () {
    return view('/e-commerce/search');
});

// Carrinho
Route::get('carrinho', function () {
    return view('/e-commerce/cart');
});

Route::middleware(['auth'])->group(function () {

    //conta
    Route::get('conta', function () {
        return view('/e-commerce/profile');
    });

    //editar perfil
    Route::get('editar', function () {
        return view('/e-commerce/profileEdit');
    });

    // Metodos de pagameto
    Route::get('metodos_de_pagameto', function () {
        return view('/e-commerce/paymentMethods');
    });



    // Pedidos
    Route::get('pedidos', function () {
        return view('/e-commerce/orders');
    });

    // Atendimento ao cliente
    Route::get('ajuda', function () {
        return view('/e-commerce/help');
    });


    // Finalizando Compra

    //finalizar
    Route::get('finalizar_compra', function () {
        return view('/e-commerce/finishPurchase');
    });

    // Pix
    Route::get('pix', function () {
        return view('/e-commerce/qrCodeFinishPurchase');
    });

    // Boleto
    Route::get('boleto', function () {
        return view('/e-commerce/ticketFinishPurchase');
    });

    // Cartão
    Route::get('cartao', function () {
        return view('/e-commerce/cardFinishPurchase');
    });

    // Sucesso
    Route::get('finalizada', function () {
        return view('/e-commerce/successFinishPurchase');
    });
});

//ERRO
Route::get('erro', function () {
    return view('/e-commerce/error/error');
});



/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('products', [ProductsController::class, 'index'])->name('products');
    Route::get('orders', [OrdersController::class, 'index'])->name('orders');
    Route::get('customers', [CustomersController::class, 'index'])->name('customers');
    Route::get('reports', [ReportsController::class, 'index'])->name('reports');
});


require __DIR__ . '/auth.php';
