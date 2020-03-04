<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home | Text summarizer for children news rendering</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

<!-- adding bootstrap theme and jquery from bootswatch -->
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <script type="text/javascript" src="{{url('js/jquery-3.1.0.js')}}"></script>
     <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>

       
    </head>
    <body>

<!--    old route declaration
 -->
    <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->



         <!--    <div class="content">
                <div class="title m-b-md">
                    TEXT SUMMARIZER FOR CHILDREN NEWS RENDERING
                </div>

                <div class="links">
                    <a href="{{ route('about') }}">About & User's guide </a>
                    <a href="{{ route('feedback_contact') }}"> Feedback / Contact us </a>
                    {{--<a href="https://blog.laravel.com">Blog</a>--}}
                   
                </div>
            </div>
        </div> -->

 <nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#">A Technique for Children news rendering by Text Summarization</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-link">     
                        <a class="navbar-nav" href="{{ url('/home') }}">Home</a>
      </li>
      <li>

      <li class="nav-link">
         <a class="nav-link" href="{{ route('login') }}" style="color: white">Login</a>
      </li>
      
      <li class="nav-link">
         <a class="nav-link" href="{{ route('register') }}" style="color: white">Register</a> 
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
       <br><br><br><br><br><br><br><br><br><br><br>
       <div class="content">
                <div class="title m-b-md">
                   <h1 align="center" style="color: green">TEXT SUMMARIZER FOR CHILDREN NEWS RENDERING</h1> 
                </div>

                 <div align="center">
                    <ul>
                  <hr/>
                  <a href="{{ route('about') }}">About </a> 
                  <hr/>
                 <a href="{{ route('feedback_contact') }}"> Feedback / Contact us </a> 
                    <hr/>
                    <ul>                  
                </div>

                <!-- <img src="img/img.PNG" alt="logo"> -->
</div>
       <br><br><br><br><br><br><br><br>

    <!-- Footer -->
    @include ('inc.footer')
    </body>
</html>
