<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('e-commerce.home', ['user' => $user]);
        }

        return view('e-commerce.home');
    }

    public function profile()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('e-commerce.profile', ['user' => $user]);
        }

        return view('e-commerce.profile');
    }
}
