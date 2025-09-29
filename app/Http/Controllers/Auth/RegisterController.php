<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class RegisterController extends Controller
{
    /**
     * Summary of show
     * @return \Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Summary of store
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $credentials = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($credentials) {
            Customer::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            return redirect()->route('thanks');
        }

        return redirect()->route('home');
    }

}
