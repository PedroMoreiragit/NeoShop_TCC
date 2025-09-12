<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;



/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Route::get('register', [RegisterController::class, 'show'])->name('register');
Route::post('register', [RegisterController::class, 'store']);

Route::get('login', [LoginController::class, 'show'])->name('login');
Route::post('login', [LoginController::class, 'store']);


Route::get('recuperacao_de_senha', function () {
    return view('auth.reset_password_email');
});

Route::get('redefinir_senha', function () {
    return view('auth.reset_password');
});

Route::get('obrigado', function () {
    return view('auth.thanks');
});




/*
|--------------------------------------------------------------------------
| E-commerce
|--------------------------------------------------------------------------
*/
//home
Route::get('/', function () {
    return view('/e-commerce/home');
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


//ERRO
Route::get('erro', function () {
    return view('/e-commerce/error/error');
});



/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::get('home', function () {
    return view('/dashboard/home');
});
