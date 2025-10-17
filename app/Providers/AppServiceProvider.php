<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;
class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Blade::if('admin', function () {
            $user = Auth::user();
            return $user && $user->role && $user->role->name === 'admin';
        });

        Blade::if('customer', function () {
            $user = Auth::user();
            return $user && $user->role && $user->role->name === 'customer';
    });
}
}
