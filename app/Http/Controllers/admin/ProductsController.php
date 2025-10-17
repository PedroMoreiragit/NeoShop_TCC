<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
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

        return view('dashboard.products');
    }
}
