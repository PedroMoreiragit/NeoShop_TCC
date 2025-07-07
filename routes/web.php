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


// Home
Route::get('/', function () {
    return view('/e-commerce/home');
});


// Product
Route::get('produto', function () {
    return view('/e-commerce/product');
});
