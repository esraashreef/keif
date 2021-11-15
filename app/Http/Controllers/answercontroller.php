<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\questions;
use Illuminate\Support\Facades\Auth;
class answercontroller extends Controller
{
    
    public function store(Request $request ,  $id)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);
        $answer = new Answer;
        $answer->body = $request->get('body');
        $answer->user_id = Auth::id();
        $question = questions::find($request->get('question_id'));
        $question->answers()->save($answer);

        return back();
      
        
       
        
    }

    public function destroy( $id)

    {
        
        
        $answer = Answer::find($id);
        $answer->delete();

        return back();
    }
    public function edit($id)

    {
        $answer = Answer::find($id);
        $q =  $answer->question_id;
       
        return view('editanswer',[
            'answer' => $answer,
           
             
        ]);
    }
    public function update(Request $request , $aid ,$qid)
    
    {

        $this->validate($request, [
            'body' => 'required',
        ]);
        $answer =  Answer ::find($aid);
        $answer->body = $request->get('body');
        $answer->user_id = Auth::id();
        $question = questions::find($qid);
        $question->answers()->save($answer);
        

        
        return redirect()->route('question', [$qid]);
       
    }

}
