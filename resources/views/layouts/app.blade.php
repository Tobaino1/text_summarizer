<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

      
</head>
<body>
<div id="app">
   <!--  <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container"> -->
            <!-- <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button> -->

          <!--   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                Left Side Of Navbar
                <ul class="navbar-nav mr-auto">

                </ul> -->

                <!-- Right Side Of Navbar -->
<!--                 <ul class="navbar-nav ml-auto">
 -->                    <!-- Authentication Links -->
                   <!--  @guest
                        <li class="nav-item">-
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li> -->
                     <!--    @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest -->
                <!-- </ul> -->
            
           
           <!--  </div>
        </div>
    </nav> -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#">A Technique for Children news rendering by Text Summarization</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-link">     
         <a class="nav-link" href="{{ url('/home') }}" style="color: white">Home</a>
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
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer -->
   @include ('inc.footer')
    <!-- Footer -->
</div>
</body>
</html>
