<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminVerification
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (!$user || $user->role_id !== 1) {
            return redirect('/')->withErrors(['error' => 'Acesso negado.']);
        }

        return $next($request);
    }
}
