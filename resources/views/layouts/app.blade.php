<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SUPEROFERTAS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/main.css" />
    
    <style>
        body{
            background-image: url("../images/pccc.png");
        }
        </style>

   
</head>
<body  >
    
<div id="page-wrapper">
        
    <header style="background-color:rgba(255,175,75,1);" id="header" class="alt">
                <h1><a href="/">SUPEROFERTAS</a> by softy</h1>
                <nav id="nav">
                    <ul>
                    
                
            
                    <!-- Authentication Links -->
                    @guest
                        <li >
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                            
                        </li>
                        
                        @if (Route::has('register'))
                            <li >
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a  href="#"  class="icon fa-angle-down" >
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                             <ul>
                            <div>
                                <li><a  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                </li>
                                

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                             </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</ul>
</nav>
</div>

    <main class="py-4">
        @yield('content')
    </main>

</header>

      
</body>
</html>
