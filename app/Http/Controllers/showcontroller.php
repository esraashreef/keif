<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questions;
use App\Models\Answer;
class showcontroller extends Controller
{
    public function index($id)
    {
        $question = questions::find($id);
        $answers = $question->answers()->with('user')->paginate(5);
        return view('show', [
            'question' => $question,
             'answers'=> $answers
        ]);
    }
}
