<!doctype html>
<html lang="fr">
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
      <!-- Barre de menu -->
      <div class="container-fluid">
        <div class="row" id="page">
            <div class="col-md-1"><a href="presentation.php"><img src="img/nouncemenu.png" class="img-img"></a></div>
          <div class="col-md-10"></div>
          <div class="col-md-1 text-center" onclick="openNav()">
            <span class="glyphicon glyphicon-th-large" style="color:#196cff"></span>
          </div>

          <!-- menu déroulant -->
          <div id="mySidenav" class="sidenav">
            <div class="container-fluid">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="profil.php">Profil</a>

              <!-- connection menu deroulant -->
                <div class="row bottom">
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav">
                            <li><a href="presentation.php"><button class="btn btn-default go"> Présentation </button></a></li>
                            <li><a href="recherche.php"><button class="btn btn-default go"> Recherche </button></a></li>
                            <li><a href="references.php"><button class="btn btn-default go"> Références </button></a></li>
                            <li><a href="contact.php"><button class="btn btn-default go"> Contact </button></a></li>
                        </ul>
                    </div>

                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Barre de menu -->

      <!-- Contenu de la page (Dans les pages php)-->

