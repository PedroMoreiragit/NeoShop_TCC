<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAdmin
{
    public function handle(Request $request, Closure $next)
    {

        if (Auth::guard('admin')->check()) {
            return $next($request);
        }


        if (Auth::guard('web')->check()) {
            return redirect()->route('home');
        }


        return redirect()->route('login');
    }
}

