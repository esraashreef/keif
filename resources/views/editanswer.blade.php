@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        
     <div class="w-11/12 bg-white p-6 rounded-lg font-serif ">
    
        


                      @auth
                <form action="/answer/{{$answer->id}}/{{$answer->questions_id}}/update" method="post" class="mb-4">
                @csrf
                    <div class="  m-3 p-3 rounded-lg">
                         <p class="mb-2  text-2xl text-blue-800 p-2 ">your answer</p>
                       
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-white border hover:border-gray-500 w-8/12 place-items-center p-2 ml-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="please write you answer here.">{{$answer->body}}</textarea>
                        <input type="hidden" name="question_id" value="{{$answer->questions_id}}" />
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