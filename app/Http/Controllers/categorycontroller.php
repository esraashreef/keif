<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questions;
class categorycontroller extends Controller
{
    public function index($category)
    {
       
        $questions = questions::where('categories', $category)->orderBy('created_at', 'desc')->paginate(5);
        return view('category', [
            'questions' => $questions,
            
        ]);
    }
}
