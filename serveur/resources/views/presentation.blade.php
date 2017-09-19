<?php
//lien de connection
//lien header
$titrePage = "Nounce";
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
        <div class="col-md-1 col-sm-4"><a href="welcome.blade.php"><img src="img/nouncemenu.png"></a></div>
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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 foo">
            <h2>Nounce c'est quoi ?</h2>
            <p class="para">
                Professionnel ou amical, Nounce est une communauté d'expatrier qui cherche à s'entraider
                La plateforme est destinée aux personnes souhaitant s'expatrier ou étant déjà eux-mêmes expatrier.
                Cette mise en relation permet d'avoir des possibilités et des facilités dans un éventuel changement de
                vie.
            </p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-6 foo">
            <h2>Comment ça marche ?</h2>
            <div class="para"> Le fonctionnement repose sur deux principes :
                <p><strong>La Solidarité</strong><br>
                    L'un des grand principe est basé sur l'entraide, les expatriers sont la pour
                    aider leur futur congénère dans ce périple.
                </p>
                <p><strong>L'échange</strong><br>
                    Il permet aussi un échange entre les divers utilisateurs leurs
                    permettant d'etoffer leur reseaux sur place et ainsi avoir une meilleur
                    intégration.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 foo">
            <h2>Le services Nounce</h2>
            <p class="para">
                Nous vous proposons une recherche des potentiels expatriers sur votre futur territoire,
                vous pouvez ainsi vous mettre en relation et commercer à échanger.
            </p>
        </div>
    </div>
</div>
</body>
</html>
