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
            <form>
              <div class="form-group">
                <label for="InputEmail">Nom</label>
                <input type="email" class="form-control" id="InputEmail1" placeholder="Nom">
              </div>
              <div class="form-group">
                <label for="InputEmail">Prenom</label>
                <input type="email" class="form-control" id="InputEmail1" placeholder="Prenom">
              </div>
              <div class="form-group">
                <label for="InputEmail">Pseudo</label>
                <input type="email" class="form-control" id="InputEmail1" placeholder="Pseudo">
              </div>
              <div class="form-group">
                <label for="InputEmail">Email address</label>
                <input type="email" class="form-control" id="InputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="InputPassword">Password</label>
                <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="InputPasswordConfirmation">Confirmation Password</label>
                <input type="password" class="form-control" id="InputPassword1" placeholder="Confirmer Password">
              </div>
              <button type="submit" class="btn btn-default go">Go!</button>
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
                            <li><a href="#"> Contact </a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>
