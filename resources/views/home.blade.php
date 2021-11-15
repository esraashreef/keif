@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg ">
            <p class="p-2 mb-2  text-blue-700 text-xl font-weight: 800"> Choose a Category </p>
            <div class="row flex justify-center">
           
            <div  class="card w-5/12  m-4 p-4 card border-info text-center cat " style="">
            <a href="{{ URL::to('/categories/business') }}">
                <div class="card-body">
                  <h5 class="card-title">Business, Finance & Economics</h5>
                      
                </div>
             </a>
            </div>
            
            
            <div  class="card w-5/12  m-4 p-4 card border-info text-center cat" style="">
            <a href="{{ URL::to('/categories/art') }}">
                <div class="card-body">
                  <h5 class="card-title">Entertainment, Art & Culture</h5>
                      
                </div>
             </a> 
            </div>


            <div class="card w-5/12  m-4 p-4 card border-info text-center cat"style="">
            <a href="{{ URL::to('/categories/computer') }}">
                <div class="card-body">
                  <h5 class="card-title">Computers, Science & Technology</h5>
                      
                </div>
                </a> 
            </div>
            <div class="card w-5/12  m-4 p-4 card border-info text-center cat"style="">
            <a href="{{ URL::to('/categories/society') }}">
                <div class="card-body">
                  <h5 class="card-title">Society & Issues</h5>
                      
                </div></a> 
            </div>
            <div class="card w-5/12  m-4 p-4 card border-info text-center cat"style="">
            <a href="{{ URL::to('/categories/health') }}">
                <div class="card-body">
                  <h5 class="card-title">Health & Medicine</h5>
                      
                </div></a> 
            </div>
            <div class="card w-5/12  m-4 p-4 card border-info text-center cat"style="">
            <a href="{{ URL::to('/categories/travel') }}">
                <div class="card-body">
                  <h5 class="card-title">Travel</h5>
                      
                </div></a> 
            </div>
            <div class="card w-5/12  m-4 p-4 card border-info text-center cat"style="">
            <a href="{{ URL::to('/categories/sport') }}">
                <div class="card-body">
                  <h5 class="card-title">Sport & Leisure</h5>
                      
                </div></a> 
            </div>
            <div class="card w-5/12  m-4 p-4 card border-info text-center cat"style="">
            <a href="{{ URL::to('/categories/food') }}">
                <div class="card-body">
                  <h5 class="card-title">Food & Cuisine</h5>
                      
                </div></a> 
            </div>
            <div class="card w-5/12  m-4 p-4 card border-info text-center cat"style="">
            <a href="{{ URL::to('/categories/fashion') }}">
                <div class="card-body">
                  <h5 class="card-title">Fashion</h5>
                      
                </div></a> 
            </div>
            <div class="card w-5/12  m-4 p-4 card border-info text-center cat"style="">
            <a href="{{ URL::to('/categories/history') }}">
                <div class="card-body">
                  <h5 class="card-title">History</h5>
                      
                </div></a> 
            </div>
            <div class="card w-5/12  m-4 p-4 card border-info text-center cat"style="">
            <a href="{{ URL::to('/categories/home') }}">
                <div class="card-body">
                  <h5 class="card-title">Home & Interiors</h5>
                      
                </div></a> 
            </div>
</div>

</div>
        </div>
    </div>
@endsection