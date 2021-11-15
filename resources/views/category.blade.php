@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        
     <div class="w-11/12 bg-white p-6 rounded-lg font-serif ">
     <p class="mb-2  text-3xl text-blue-800 p-3 "> Most recent Questions</p>
        @if ($questions->count())
                @foreach ($questions as $question)
                    <div class=" w-9/12 bg-gray-50 ml-4 p-2 rounded-lg m-3 " >
                        <a class="text-sm mb-2 text-gray-700 ml-2 m-1">{{$question->user->name}} </a><span
                        class="text-gray-600 text-xs ">{{$question->created_at->diffForHumans()  }}</span>
                        <div class=" m-2 p-1">
                          <p class="mb-2  text-xl text-blue-700 "> {{$question->question}}</p>

                           <p class="mb-3 text-base  m-2  text-gray-600"> {{ Str::limit($question->question_context, 50) }}</p>

                           <a href="/question/{{$question->id}}" class="btn btn-outline-primary btn-sm m-1 text-sm">read more</a>

                           @auth
                           @if($question->ownedby(auth()->user()))
                             <a href="/question/{{$question->id}}/edit"  class="btn btn-outline-success btn-sm m-1 text-sm">edit</a>
              
              
                           <form action="/question/{{$question->id}}" method="POST" class="d-inline">
                              @csrf
                            @method('DELETE') 
                 
                          <button type="submit" class="btn btn-outline-danger btn-sm m-1 text-sm"> Delete</button>
                         </form>
                         @endif
                         @endauth
                       </div> 
                    </div>
                @endforeach
                <div class="pagination-sm">  {{ $questions->links() }}</div>
              
            @else
                <p>There are no questions</p>
            @endif
     </div>    
    </div>
@endsection