<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8"> <!-- character set ( afiichage des caractéres ) -->
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- compatibilité avec les navigateurs -->
    <title>@yield('pageTitle')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" href="apple-touch-icon.png"> <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{asset('css.bootstrap.css')}}"> <!-- Déclaration Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script> <!-- Scripts JS -->
    <script src="{{asset('js/main.js')}}"></script> <!-- Navigation lateral -->
    <script src="{{asset('js/bootstrap.js')}}"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style> @import url('https://fonts.googleapis.com/css?family=Roboto+Slab:400,700');</style>

</head>
<body>
<!-- Barre de menu -->
<div class="container-fluid">
    <div class="row" id="page">
        <div class="col-md-1 col-sm-4"><a href="welcome.blade.php"><img src="img/nouncemenu.png" height="120%" width="120%"></a></div>
        <div class="col-md-10"></div>
        <div class="col-md-1 text-center" onclick="openNav()">
            <span class="glyphicon glyphicon-th-large"></span>
        </div>

        <!-- menu déroulant -->
        <div id="mySidenav" class="sidenav">
            <div class="container-fluid">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                <!-- connection menu deroulant -->
                <div class="row">
                    <form id="btn-header">
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" class="form-control sub" placeholder="email">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="password" class="form-control sub" placeholder="Mot de Passe">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-default go">Go!</button>
                        </div>
                    </form>

                    <div class="text-center">
                        <img src="{{asset('img/profil.jpg')}}" alt="Photo Profil" width="240" class="img-rounded">
                    </div>

                    <!-- Profil user -->
                    <a href="#">Profil</a>

                    <div class="userinfo">
                        <div class="caption">
                            <h3>Pseudo</h3>
                            <h5><strong>Pays:</strong> label</h5>
                            <h5><strong>Ville:</strong> label</h5>
                            <h5><strong>Age:</strong> label</h5>
                            <h5><strong>Sexe:</strong> label</h5>
                        </div>
                    </div>

                    <a href="#">Services</a>
                    <a href="#">Clients</a>
                    <a href="#">Contact</a>


                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')

</body>
</html>