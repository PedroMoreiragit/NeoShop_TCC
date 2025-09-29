<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $customer = Auth::user();
            return view('e-commerce.home', ['customer' => $customer]);
        }

        return view('e-commerce.home');
    }
}
