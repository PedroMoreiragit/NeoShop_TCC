<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\EmailCheckController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ThanksController;
use App\Http\Controllers\Store\HomeController;

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/

// Register
Route::controller(RegisterController::class)->group(function () {
    Route::get('register', 'show')->name('register');
    Route::post('register', 'store');
});

// Login
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'show')->name('login');
    Route::post('login', 'store');
});


// Email Check
Route::controller(EmailCheckController::class)->group(function () {
    Route::get('email_check', 'show')->name('email_check');
    Route::post('email_check', 'store');
});

// Reset Password
Route::controller(ResetPasswordController::class)->group(function () {
    Route::get('reset_password', 'show')->name('reset_password');
    Route::post('reset_password', 'store');
});

// Thanks
Route::controller(ThanksController::class)->group(function () {
    Route::get('thanks', 'show')->name('thanks');
});



/*
|--------------------------------------------------------------------------
| E-commerce
|--------------------------------------------------------------------------
*/

// Home
Route::controller(HomeController::class)->group(function () {
    Route::get('home', 'show')->name('home');
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
Route::get('dash', function () {
    return view('/dashboard/home');
});
