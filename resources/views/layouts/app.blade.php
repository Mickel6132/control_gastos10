<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Control Gasto') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->   
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark " style="font-family: algeria; color: white;">
<img src="https://c.tenor.com/RlUzcdBM6dcAAAAC/rent-a-girlfriend-kanojo-okarishimasu.gif" width="50px">ππππ πππΏπππππππ
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
  <div class="collapse navbar-collapse" style="margin-left: 60%;">
    <div class="navbar-nav">

      <a class="btn btn-primary text-dark" href="{{route('usuarios')}}">ππ¨πͺππ§ππ€π¨</a>

      <a class=" btn btn-info" href="{{route('categorias')}}">πΎππ©πππ€π§πππ¨</a>

      

                                <a class="btn btn-light" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('πΎππ§π§ππ§ π¨ππ¨ππ€π£') }}
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
    </div>
  </div>
</nav>
       <div class="">
        
        <!-- Esto es una seccion -->
        @yield('content') 
    </div>
   <!--  <div class="footer" style="background:black;color: white;">
        <h1>Footer</h1>
    </div> -->
</body>
</html>