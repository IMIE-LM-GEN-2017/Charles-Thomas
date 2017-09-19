<?php
//lien de connection
//lien header
$titrePage= "Contact";
?>
<html>
<head>
    <meta charset="utf-8"> <!-- character set ( afiichage des caractéres ) -->
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- compatibilité avec les navigateurs -->
    <title><?=$titrePage ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png"> <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/bootstrap.css"> <!-- Déclaration Bootstrap -->
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script> <!-- Scripts JS -->
    <script src="js/main.js"></script> <!-- Navigation lateral -->
    <script src="js/bootstrap.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet"> <!--Google Font -->
</head>
    <body>
    <div class="container-fluid">
        <div class="row" id="page">
            <div class="col-md-1 col-sm-4"></div>
            <div class="col-md-10"></div>
            <div class="col-md-1 text-center" onclick="openNav()">
                <span class="glyphicon glyphicon-th-large" style="color:#196cff"></span>
            </div>

            <!-- menu déroulant -->
            <div id="mySidenav" class="sidenav">
                <div class="container-fluid">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                    <!-- connection menu deroulant -->
                    <div class="row">
                        <div class="text-center">
                            <img src="img/profil.jpg" alt="Photo Profil" width="240">
                        </div>

                        <!-- Profil user -->
                        <a href="profil.php">Profil</a>

                        <div class="userinfo">
                            <div class="caption">
                                <h3>Pseudo</h3>
                                <h5><strong>Pays:</strong> label</h5>
                                <h5><strong>Ville:</strong> label</h5>
                                <h5><strong>Age:</strong> label</h5>
                                <h5><strong>Sexe:</strong> label</h5>
                            </div>
                        </div>
                        <!-- connection menu deroulant -->
                        <div class="row bottom">
                            <div class="collapse navbar-collapse" id="menu">
                                <ul class="nav navbar-nav">
                                    <li><a href="presentation.blade.php"><button class="btn btn-default go"> Présentation </button></a></li>
                                    <li><a href="recherche.php"><button class="btn btn-default go"> Recherche </button></a></li>
                                    <li><a href="references.php"><button class="btn btn-default go"> Références </button></a></li>
                                    <li><a href="contact.blade.php"><button class="btn btn-default go"> Contact </button></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="menu-principal">
    <div class="col-md-12 text-center">
        <a href="welcome.blade.php"><img src="img/nouncemenu.png" id="logo"></img></a>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading" style="color:#004082"><b>Contactez-nous</b></h2>
                    <p style="color:#004082">Nous restons à votre disposition pour plus de renseignements.</p>
                    <hr class="primary">
                    <div class="col-lg-4 col-lg-offset-2 text-center">
                        <h5 style="color:#004082"><b>Charles Renault-Clogenson</b></h5 style="color:#004082">
                    </div>
                    <div class="col-lg-4 text-center">
                        <h5 style="color:#004082"><b>Thomas MacLune</b></h5>
                        </br></div>
                    <div class="col-lg-4 col-lg-offset-2 text-center">
                        <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                        <a href="mailto:charles.renaultclogenson@gmail.com" style="color:#004082"><img class="leslogos" src="img/arobase.png"></a>
                        <a href="https://fr.linkedin.com/in/charles-renault-clogenson-349aa0133"><img class="leslogos" src="img/linkedin.jpg"></a>
                        <a href="https://twitter.com/charles_rc1?lang=fr"><img class="leslogos" src="img/twitter.jpg"></a>
                    </div>
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                        <a href="mailto:maclune@live.fr" style="color:#004082"><img class="leslogos" src="img/arobase.png"></a>
                        <a href="https://fr.linkedin.com/in/thomas-maclune-89927171/"><img class="leslogos" src="img/linkedin.jpg"></a>
                        <a href="https://twitter.com/studio_321"><img class="leslogos" src="img/twitter.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
