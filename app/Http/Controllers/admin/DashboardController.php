<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!Auth::check() && $user->role || $user->role->name === 'customer') {
            return redirect()->route('home');
        }

        return view('dashboard.dashboard');
    }
}
