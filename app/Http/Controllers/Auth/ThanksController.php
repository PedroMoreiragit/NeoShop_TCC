<?php

namespace App\Http\Controllers\Auth;;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThanksController extends Controller
{
    /**
     * Summary of show
     * @return \Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('auth.thanks');
    }
}
