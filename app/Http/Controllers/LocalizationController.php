<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }
    public function lang_change(Request $request)
    {  
       
        
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
       
        return redirect()->back();
    }
}

