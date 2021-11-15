@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            @auth
                <form action="/question/{{$question->id}}/update" method="post" class="mb-4">
                    @csrf
                    <div class="mb-4">
                        <p class ="p-2  text-blue-700 text-xl font-weight: 800">question</p>
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="question" id="question" cols="30" rows="2" class="bg-gray-50 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" value="{{$question->question}}">{{$question->question}}</textarea>

                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                
                    <div class="mb-4">
                         <p class="p-2  text-blue-700 text-xl font-weight: 800;">question context</p>
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="question_context" id="question_context" cols="30" rows="4" class="bg-gray-50 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" value="{{$question->question_context}}">{{$question->question_context}}</textarea>

                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">submit</button>
                    </div>
                </form>
            @endauth

            
                  
               
                
          
        </div>
    </div>
@endsection