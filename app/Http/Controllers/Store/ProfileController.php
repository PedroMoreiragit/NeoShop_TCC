<?php

namespace App\Http\Controllers\store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user(); 
            return view('e-commerce.profile', ['user' => $user]);
        }

        return view('e-commerce.profile');
    }
}
