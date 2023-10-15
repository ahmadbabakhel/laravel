<?php

namespace App\Http\Controllers;
 
class LogoutController extends Controller
{
    public function index()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
