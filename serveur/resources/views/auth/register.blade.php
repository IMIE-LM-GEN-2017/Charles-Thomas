@extends('layouts.app')
@section('title', 'Inscription')

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
    <!-- <script src="js/npm.js"></script> -->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inscription</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="col-md-6">
                            <label for="name">Nom :</label>
                            <div>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <strong>{{ $errors->first('name') }}</strong>
                                @endif
                                <br/>


                                <label for="prenom">Prénom :</label>
                                <div>
                                    <input id="prenom" type="text" name="prenom" required autofocus>

                                    @if ($errors->has('prenom'))
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    @endif
                                    <br/>

                                    <label for="pseudo">Pseudo :</label>
                                    <div>
                                        <input id="pseudo" type="text" name="pseudo" value="{{ old('pseudo') }}"
                                               required
                                               autofocus>

                                        @if ($errors->has('pseudo'))
                                            <strong>{{ $errors->first('pseudo') }}</strong>
                                        @endif
                                        <br/>

                                        <label for="date_naissance"> Date de Naissance :</label>
                                        <div>
                                            <input id="date_naissance" type="date" name="date_naissance">
                                        </div>

                                        <label for="sexe"> Sexe :</label>
                                        <div>
                                            <div id="h"><input type="radio" value="Homme" name="sexe"/> Homme</div>
                                            <div id="f"><input type="radio" value="Femme" name="sexe"/> Femme</div>
                                        </div>

                                        <label for="email">E-mail :</label>
                                        <div>
                                            <input id="email" type="text" name="email" value="{{ old('email') }}"
                                                   required
                                                   autofocus>

                                            @if ($errors->has('email'))
                                                <strong>{{ $errors->first('email') }}</strong>
                                            @endif
                                            <br/>

                                            <label for="password">Mot de Passe :</label>
                                            <div>
                                                <input id="password" type="password" name="password" required>

                                                @if ($errors->has('password'))
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                @endif
                                                <br/>

                                                <label for="password-confirm">Confirmation Mot de Passe :</label>
                                                <div>
                                                    <input id="password-confirm" type="password" name="password_confirmation"
                                                           required>
                                                </div>
                                                <br/>
                                            </div>

                                            <button type="submit" class="btn btn-primary">
                                                Inscription
                                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
