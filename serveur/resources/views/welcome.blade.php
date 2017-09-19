@extends('layouts.app')

@section('title', 'Nounce')
@section('content')

        <!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <!-- character set ( afiichage des caractéres ) -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- compatibilité avec les navigateurs -->
    <title>Nounce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Déclaration Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Scripts JS -->
    <script src="{{asset('js/bootstrap.js')}}"></script>

    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto+Slab:400,700');
    </style>

</head>
<body style="background-color: #005cff;">

<div class="container-fluid">
    <div class="home">
        <div class="col-md-12 text-center">
            <img src="img/nouncehome.png" id="logo"></img>
            <h4> Vous n'êtes plus seuls, Nounce sommes là </h4>
            <a href="../public/register"><button class="btn-outline-secondary"> Inscription </button></a>

            <nav class="navbar navbar-default navbar-fixed-bottom">
                <div class="container-fluid" id="menu-principal">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-haspopup="true">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html"><img src="img/logomenu.png"></a></li>
                            <li><a href="{{ route('presentation') }}"> Présentation </a></li>
                            <li><a href="recherche.php"> Recherche </a></li>
                            <li><a href="references.php"> Références </a></li>
                            <li><a href="{{ route('contact') }}"> Contact </a></li>
                        </ul>
                        <form class="navbar-form navbar-right" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email"></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control sub" name="email" placeholder="Adresse Mail" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password"></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control sub" name="password"  placeholder="Password" required >

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <button type="submit" class="btn btn-default go">Connexion</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
</body>
</html>
@endsection
