<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>keif</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <style>
            @media only screen and (max-width: 780px) {
                .title{
                    font-size: 12px;
                    margin: 0px;
                    text-align: justify;
                    padding: 2px;
                    word-spacing: 0.5px;
                    display:flex;
                    flex-shrink: 3; 
                    justify-content: center;

                }
                .cat{
                    font-size: 12px;
                    margin: 0px;
                    text-align: justify;
                    padding: 2px;
                    width: 250px;
                    



                }
                
               }
        </style>
    </head>
    <body class="bg-gray-100 font-serif ">
        <nav class="p-4 bg-white flex justify-between mb-4 font-serif  title">
            <ul class="flex items-center title">
                <li class="title">
                    <a href="/" class="p-3 font-weight:800 text-blue-500 text-xl  title "> {{ __('message.page_title') }}</a>
                </li>
                <li class="title">
                    <a href="/dashboard" class="p-3 title">{{ __('message.dashboard') }}</a>
                </li>
                <li class="title">
                    <a href="/questions" class="p-3  title">{{ __('message.askquestion') }}</a>
                </li>
            </ul>

            <div class=" mt-2 title flex items-center">
             <form action="/search" method="get" class="mb-2">
                @csrf
          
              <div class="input-group custom-search-form flex justify-center">
               <input type="text" name="search" class="form-control title" placeholder="Search .... ">
               <span class="input-group-btn">
                <button type="submit" class="btn btn-default-sm">
                  <i class="fa fa-search"></i>
                 </button>
                 </span>
                </div>
                </form>

            </div>
               
</div>

                
        
         <div class=" ">

            </div> 
                  
                <ul class="flex  items-center  ">
                  
                   <div class="col-md-4  p-3  ">
                     <select class="form-control Langchange title">
                     <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>عربي</option>
                      
                     </select>
                   </div>
                @auth
                   
                    <li>
                        <a href="" class="p-3 title ">{{ auth()->user()->name }}</a>
                    </li>
                    <li>
                        <form action="/logout" method="post" class="p-3 inline title  ">
                            @csrf
                            <button type="submit">{{ __('message.logout') }}</button>
                        </form>
                    </li>

                   
                  
                @endauth

                @guest
                
                    <li>
                        <a href="/login" class="p-2  title">{{ __('message.login') }}</a>
                    </li>
                    <li>
                        <a href="/register" class="p-2  title">{{ __('message.register') }}</a>
                    </li>

                    
                
                @endguest
               </ul>
         </div>
</div>
        </nav>
        @yield('content')
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
    var url = "{{ route('LangChange') }}";
    $(".Langchange").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>
</html>