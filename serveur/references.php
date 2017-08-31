<?php
//lien de connection
require_once('include/db.php');
require_once('include/function.php');

//lien header
$titrePage= "Nounce";
include('design/header.php');
?>

<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container-fluid" id="menu-principal">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-haspopup="true">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="img/logomenu.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav">
                <li><a href="presentation.php"> Présentation </a></li>
                <li><a href="recherche.php"> Recherche </a></li>
                <li><a href="references.php"> Références </a></li>
                <li><a href="contact.html"> Contact </a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control sub" placeholder="Adresse Mail">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control sub" placeholder="Mot de Passe">
                </div>
                <button type="submit" class="btn btn-default go">Connexion</button>
            </form>
        </div>
</nav>
<?php
include('design/footer.php');
?>
