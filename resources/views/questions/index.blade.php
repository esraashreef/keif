@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg ">
            @auth
                <form action="" method="post" class="mb-4 ">
                    @csrf

                    <div class="mb-4">
                    <label for="cars" class ="p-2 mb-2  text-blue-700 text-xl font-weight: 800 title" >Choose a category:</label>
                         <select class="bg-gray-50 border-2 w-full p-2  rounded-lg  title" id="ctegories" name="categories">
                               <option selected>-------</option>
                             <option name="business" id="business" value="business">Business, Finance & Economics</option>
                             <option name="art" id="art" value="art">Entertainment, Art & Culture</option>
                             <option name="computer" id="computer" value="computer">Computers, Science & Technology</option>
                             <option name="society" id="society" value="society">Society & Issues</option>
                             <option name="health" id="health" value="health">Health & Medicine</option>
                             <option name="travel" id="travel" value="travel">Travel</option>
                             <option name="sport" id="sport" value="Sport">Sport & Leisure</option>
                             <option name="food" id="food" value="Food">Food & Cuisine</option>
                             <option name="fashion" id="fashion" value="Fashion">Fashion</option>
                             <option name="history" id="history" value="History">History</option>
                             <option name="home" id="home" value="Home">Home & Interiors</option>
                        </select>
                    </div >
                    <div class="mb-4">
                        <p class ="p-2  text-blue-700 text-xl font-weight: 800 title">Question :</p>
                        <label for="question" class="sr-only">Body</label>
                        <textarea name="question" id="question" cols="30" rows="2" class="bg-gray-50 title border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="start your question with why, how, who, etc "></textarea>

                        @error('question')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                
                    <div class="mb-4">
                         <p class="p-2  text-blue-700 text-xl font-weight: 800; title">Question Context :</p>
                        <label for="question_context" class="sr-only">Body</label>
                        <textarea name="question_context" id="question_context" cols="30" rows="4" class="bg-gray-50 border-2 w-full p-4 title rounded-lg @error('body') border-red-500 @enderror" placeholder="tell your question in details."></textarea>

                        @error('question_context')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium title  ml-4">submit</button>
                    </div>
                </form>
            @endauth

            @guest
           <p> please login or register, so you can ask your question</p>       
             @endguest  
                
          
        </div>
    </div>
@endsection