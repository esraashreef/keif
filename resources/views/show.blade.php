@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        
     <div class="w-11/12 bg-white p-6 rounded-lg font-serif ">
    
        
                    <div class="bg-gray-100 m-2 p-2 rounded-lg">
                        <a class="text-base  text-gray-600 p-1 mt-4 m-2 ">{{$question->user->name}} </a><span
                        class="text-gray-600 text-xs ">{{$question->created_at->diffForHumans()  }}</span>
                        <div class=" m-1 p-3 ">
                          <p class="  text-xl text-blue-700 "> {{$question->question}}</p>

                          <p class=" text-base text-gray-600 p-2 mb-2 "> {{ $question->question_context }}</p>
                           @auth
                          @if($question->ownedby(auth()->user())) 
                          <a href="/question/{{$question->id}}/edit"  class="btn btn-outline-success btn-sm  ml-4 m-1">edit</a>
                         <form action="/question/{{$question->id}}" method="post" class="d-inline">
                           @csrf
                            @method('DELETE') 
                            <button type="submit" class="btn btn-outline-danger btn-sm p-1"> Delete</button>
                         </form>
                         @endif
                         @endauth
                        </div> 
                    </div>
                   

                    <div class="w-10/12 ml-6 bg-gray-50 p-4 rounded-lg font-serif ">
                      <p class="mb-2  text-2xl text-blue-800 p-2 "> The Answers</p>
                      @if ($answers->count())
                        @foreach ($answers as $answer)
                          <div class="bg-white m-3 p-3 rounded-lg ">
                           <a class="text-sm mb-2 text-blue-700">{{$answer->user->name}} </a><span
                            class="text-gray-600 text-xs font-thin">{{$answer->created_at->diffForHumans()  }}</span>
                           <div class="">
                          <p class="mb-2  text-lg p-2 text-gray-600 "> {{$answer->body}}</p>

                           
                             @auth
                          @if($answer->answeredby(auth()->user()))
                             <a href="/answer/{{$answer->id}}/edit"  class="btn btn-outline-success btn-sm text-xs">edit</a>
                            <form action="/answer/{{$answer->id}}" method="POST" class="d-inline">
                             @csrf
                             @method('DELETE')
                              <button type="submit" class="btn btn-outline-danger btn-sm text-xs"> Delete</button>
                            </form>
                            @endif
                            @endauth
                           </div> 
                         </div>
                        @endforeach

                        {{ $answers->links() }}
                      @else
                            <p>There are no answers .Be the first </p>
                      @endif


                      @auth
                <form action="/answer/{{$question->id}}" method="post" class="mb-4">
                @csrf
                    <div class="  m-3 p-3 rounded-lg">
                         <p class="mb-2  text-2xl text-blue-800 p-2 ">your answer</p>
                       
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-white border hover:border-gray-500 w-8/12 place-items-center p-2 ml-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="please write you answer here."></textarea>
                        <input type="hidden" name="question_id" value="{{ $question->id }}" />
                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                        <div>
                        <button type="submit" class=" ml-8 bg-blue-500 text-white px-3  py-1.5 rounded text-base">submit</button>
                       </div>
                    </div>
                    </form>
            @endauth
                   
               
                 </div>    


                    
                    
              
     </div>    

                      
    </div>
@endsection