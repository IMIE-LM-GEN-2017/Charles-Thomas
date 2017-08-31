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

	</head>
    <body>
      <!-- Barre de menu -->
      <div class="container-fluid">
        <div class="row" id="page">
          <div class="col-md-1"><a href="index.html"><img src="img/nouncemenu.png" height="120%" width="120%"></a></div>
          <div class="col-md-10"></div>
          <div class="col-md-1 text-center" onclick="openNav()">
            <span class="glyphicon glyphicon-th-large"></span>
          </div>

          <!-- menu déroulant -->
          <div id="mySidenav" class="sidenav">
            <div class="container-fluid">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="#">Profil</a>
              <a href="#">Services</a>
              <a href="#">Clients</a>
              <a href="#">Contact</a>

              <!-- connection menu deroulant -->
              <div class="row bottom">
                <form>
                    <div class="col-md-5">
                      <div class="form-group">
                        <input type="text" class="form-control sub" placeholder="Adresse Mail">
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <input type="password" class="form-control sub" placeholder="Mot de Passe">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <button type="submit" class="btn btn-default go">Connexion</button>
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Barre de menu -->

      <!-- Contenu de la page (Dans les pages php)-->
