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

    //Criar um controller separado pois é um crud de customers
    public function customers()
    {
        if (!Auth::check()) {
            return redirect()->route('home');
        }

        $user = Auth::user();

        if ($user->role && $user->role->name === 'customer') {
            return redirect()->route('home');
        }

        return view('dashboard.customers');
    }

    //crud
    public function orders()
    {
        if (!Auth::check()) {
            return redirect()->route('home');
        }

        $user = Auth::user();

        if ($user->role && $user->role->name === 'customer') {
            return redirect()->route('home');
        }

        return view('dashboard.orders');
    }


    //crud
    public function products()
    {
        if (!Auth::check()) {
            return redirect()->route('home');
        }

        $user = Auth::user();

        if ($user->role && $user->role->name === 'customer') {
            return redirect()->route('home');
        }

        return view('dashboard.products');
    }

    //crud
    public function reports()
    {
        if (!Auth::check()) {
            return redirect()->route('home');
        }

        $user = Auth::user();

        if ($user->role && $user->role->name === 'customer') {
            return redirect()->route('home');
        }

        return view('dashboard.reports');
    }
}
