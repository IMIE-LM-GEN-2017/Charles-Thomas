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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Scripts JS -->
    <script src="js/bootstrap.js"></script>
    <!-- <script src="js/npm.js"></script> -->
</head>
<body>
    <div class="container-fluid">
        <div class="row home">
          <div class="col-md-12 mg"></div>
          <div class="col-md-4 col-md-offset-4">
            <div><h2>Inscription</h2></div>
          <form>
              <div class="form-group">
                <label for="InputNom">Nom</label>
                <input type="text" class="form-control" id="InputNom" placeholder="Nom">
              </div>
              <div class="form-group">
                <label for="InputPrenom">Prénom</label>
                <input type="text" class="form-control" id="InputPrenom" placeholder="Prénom">
              </div>
              <div class="form-group">
                <label for="InputPseudo">Pseudo</label>
                <input type="text" class="form-control" id="InputPseudo" placeholder="Pseudo">
              </div>
              <div id="sexe">
              <!-- <td><label for="sexe">sexe:</label></td>
              <td> <input type="radio" value="Homme" name="sexe" /> Homme</td>
              <td> <input type="radio" value="femme"  name="sexe"/> femme</td>
              </tr>-->
              <div id="sexe">
              <label for="sexe"> Sexe :</label>
              </div>
              <div id="h"><input type="radio" value="Homme" name="sexe" /> Homme</div><div id="f"><input type="radio" value="femme"  name="sexe"/> femme</div>
              </div>

              <div class="form-group">
                <label for="InputEmail">Email</label>
                <input type="email" class="form-control" id="InputEmail" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="InputPassword">Mot de Passe</label>
                <input type="password" class="form-control" id="InputPassword" placeholder="Mot de Passe">
              </div>
              <div class="form-group">
                <label for="InputPasswordConfirmation">Confirmation Mot de Passe</label>
                <input type="password" class="form-control" id="InputPasswordConfirmation" placeholder="Confirmation du Mot de Passe">
              </div>
              <button type="submit" class="btn btn-default go">Go!</button>
              <a href="index.html" class="btn btn-default go">Retour à la page d'Accueil</a>
            </form>
          </div>

          <!-- menu footer -->
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
                            <li><a href="presentation.php"> Presentation </a></li>
                            <li><a href="#"> x </a></li>
                            <li><a href="#"> Références </a></li>
                            <li><a href="contact.html"> Contact </a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>
