<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questions;
use Illuminate\Support\Facades\Auth;
class dashboardcontroller extends Controller
{
    public function index()
    {   
        
        if (Auth::check()) {
            $questions = questions::where('user_id','=',Auth::user()->id)->orderBy('created_at', 'desc')->paginate(15);
            return view('dashboard', [
                'questions' => $questions,
                
            ]);
        }
        else {
            return view('dashboard'
                
            );
        }
       
    }
}
