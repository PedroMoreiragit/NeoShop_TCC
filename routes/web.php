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

Route::get('carrinho', function() {
    return view('/e-commerce/cart');
});

Route::get('finalizar', function() {
    return view('/e-commerce/finishPurchase');
});
