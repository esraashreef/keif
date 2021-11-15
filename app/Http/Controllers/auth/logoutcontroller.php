<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logoutcontroller extends Controller
{
    public function store()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
