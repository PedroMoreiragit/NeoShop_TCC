<?php


use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::view('register', 'auth.register')->name('register');
    Route::post('register', [AuthController::class, 'register']);

});


// // Route::controller(RegisterController::class)->group(function () {
// //     Route::get('register', 'show')->name('register');
// //     Route::post('register', 'store');
// // });

// // Login
// Route::controller(LoginController::class)->group(function () {
//     Route::get('login', 'show')->name('login');
//     Route::post('login', 'store');

//     // Logout
//     Route::get('logout', 'logout')->name('logout');
// });


// // Email Check
// Route::controller(EmailCheckController::class)->group(function () {
//     Route::get('email_check', 'show')->name('email_check');
//     Route::post('email_check', 'store');
// });

// // Reset Password
// Route::controller(ResetPasswordController::class)->group(function () {
//     Route::get('reset_password', 'show')->name('reset_password');
//     Route::post('reset_password', 'store');
// });

// // Thanks
// Route::controller(ThanksController::class)->group(function () {
//     Route::get('thanks', 'show')->name('thanks');
// });


