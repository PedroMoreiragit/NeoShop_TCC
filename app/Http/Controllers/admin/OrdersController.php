<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index()
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
}
