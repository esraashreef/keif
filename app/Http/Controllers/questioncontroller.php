<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questions;
class questioncontroller extends Controller

{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }


    public function index()

{
    return view('questions/index');
}
 public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'question_context' => 'required',
            'categories' => 'required',
        ]);

        $request->user()->questions()->create($request->only('question','question_context','categories'));

        return redirect('/dashboard');
    }
    public function edit($id)

    {
        $question = questions::find($id);
        return view('questions/edit',[
            'question' => $question,
             
        ]);
    }
    public function update(Request $request , $id)
    {
        $this->validate($request, [
            'question' => 'required',
            'question_context' => 'required',
           
        ]);

        $question = questions::find($id);
        $question->question = $request->input('question');
       
        $question->question_context = $request->input('question_context');
       
        
        $question->save();
        
        return redirect()->route('question', [$id]);
       
    }
    public function destroy( $id)

    {
        
        
        $question = questions::find($id);
        $question->delete();

        return redirect('/dashboard');
    }
    
    public function search( request $request){

  
        
        $key = trim($request->get('search'));
        $questions = questions::query()
        ->where('question', 'like', "%{$key}%")
        ->orWhere('question_context', 'like', "%{$key}%")
        ->orderBy('created_at', 'desc')
        ->paginate(5);
        
        return view('search',['questions' => $questions]);
      }


}
