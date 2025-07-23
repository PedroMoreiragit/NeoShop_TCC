<?php

use Illuminate\Support\Facades\Route;


// APP //

// Atuh //
Route::get('login', function () {
    return view('/auth/login');
});

Route::get('registro', function () {
    return view('/auth/register');
});

Route::get('recuperacao_de_senha', function () {
    return view('/auth/reset_password_email');
});

Route::get('redefinir_senha', function () {
    return view('/auth/reset_password');
});

Route::get('obrigado', function () {
    return view('/auth/thanks');
});


// E-commerce
Route::get('/', function () {
    return view('/e-commerce/home');
});

Route::get('produto', function () {
    return view('/e-commerce/product');
});

Route::get('pesquisar', function () {
    return view('/e-commerce/search');
});

// Carrinho
Route::get('carrinho', function() {
    return view('/e-commerce/cart');
});

// Conta
Route::get('conta', function() {
    return view('/e-commerce/profile');
});

Route::get('editar', function() {
    return view('/e-commerce/profileEdit');
});

// Metodos de pagameto
Route::get('metodos_de_pagameto', function() {
    return view('/e-commerce/paymentMethods');
});



// Pedidos
Route::get('pedidos', function() {
    return view('/e-commerce/orders');
});

// Atendimento ao cliente
Route::get('ajuda', function() {
    return view('/e-commerce/help');
});


// Finalizando Compra

Route::get('finalizar_compra', function() {
    return view('/e-commerce/finishPurchase');
});

// Pix
Route::get('pix', function() {
    return view('/e-commerce/qrCodeFinishPurchase');
});

// Boleto
Route::get('boleto', function() {
    return view('/e-commerce/ticketFinishPurchase');
});

// Cartão
Route::get('cartao', function() {
    return view('/e-commerce/cardFinishPurchase');
});

// Sucesso
Route::get('finalizada', function() {
    return view('/e-commerce/successFinishPurchase');
});


//ERRO
Route::get('erro', function() {
    return view('/e-commerce/error/error');
});
