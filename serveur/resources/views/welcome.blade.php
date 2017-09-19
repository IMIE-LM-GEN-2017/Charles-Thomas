
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
    <link rel="stylesheet" href="../views/css/bootstrap.css">
    <link rel="stylesheet" href="../views/css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Scripts JS -->
    <script src="../views/js/bootstrap.js"></script>

    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto+Slab:400,700');
    </style>

</head>
<body style="background-color: #005cff;">

<div class="container-fluid">
    <div class="row home">
        <div class="col-md-12 text-center">
            <img src="img/nouncehome.png" id="logo"></img>
            <h4> Vous n'êtes plus seuls, Nounce sommes là </h4>
            <a href="../views/auth/register.blade.php"><button class="btn-outline-secondary"> Inscription </button></a>

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
                            <li><a href="presentation.blade.php"> Présentation </a></li>
                            <li><a href="recherche.php"> Recherche </a></li>
                            <li><a href="references.php"> Références </a></li>
                            <li><a href="[[ route('contact') ]]"> Contact </a></li>
                        </ul>
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control sub" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>" placeholder="Adresse Mail">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control sub" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"placeholder="Mot de Passe">
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