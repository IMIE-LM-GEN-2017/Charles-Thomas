 <!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- Déclaration Bootstrap -->
        <link rel="stylesheet" href="{{asset('css.bootstrap.css')}}"> <!-- Déclaration Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

        <!-- Scripts JS -->
        <script src="{{asset('js/bootstrap.js')}}"></script> <!-- Scripts JS -->
        <script src="{{asset('js/main.js')}}"></script> <!-- Navigation lateral -->
        <script src="{{asset('js/bootstrap.js')}}"></script>

        <!-- Google Font -->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto+Slab:400,700');
        </style>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
<!-- Barre de menu -->
<div class="container-fluid">
    <div class="row" id="page">
        <div class="col-md-1 col-sm-4"><a href="{{ url('/') }}"><img src="img/nouncemenu.png" height="120%"
                                                                     width="120%"></a></div>
        <div class="col-md-10"></div>
        <div class="col-md-1 text-center" onclick="openNav()">
            <span class="glyphicon glyphicon-th-large"></span>
        </div>

        <!-- menu déroulant -->
        <div id="mySidenav" class="sidenav">
            <div class="container-fluid">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Right Side Of Navbar -->
                <div class="container-fluid">
                    <!-- Authentication Links -->
                    @guest
                        <div class="row">
                            <form id="btn-header" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="col-md-5">
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email"></label>

                                        <input id="email" email" class="form-control sub" name="email"
                                        placeholder="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password"></label>
                                        <input id="password" type="password" class="form-control sub" name="password"
                                               placeholder="Mot de Passe" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-default go">Go!</button>
                                </div>
                            </form>
                        </div>
                        <a href="{{ route('presentation') }}"> Présentation </a>
                        <a href="recherche.php"> Recherche </a>
                        <a href="references.php"> Références </a>
                        <a href="{{ route('contact') }}"> Contact </a>
                </div>
                @endguest
                @auth
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#">Profil </a>
                                        <a href="#">Services</a>
                                        <a href="#">Clients</a>
                                        <a href="#">Contact</a>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
            </div>

            <div class="text-center">
                <img src="img/profil.jpg" alt="Photo Profil" width="240" class="img-rounded">
            </div>
            <div class="userinfo">
                <div class="caption">
                    <h3>Pseudo</h3>
                    <h5><strong>Pays:</strong> label</h5>
                    <h5><strong>Ville:</strong> label</h5>
                    <h5><strong>Age:</strong> label</h5>
                    <h5><strong>Sexe:</strong> label</h5>
                </div>
            </div>
            @endauth
        </div>
    </div>
    </nav>
</div>
<div>
    @yield('content')
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>