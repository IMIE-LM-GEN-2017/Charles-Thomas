<?php
require_once('include/db.php');
function verifierFormulaire($champs){
  if(count($_POST)>0){
    for($i=0; $i<count($champs); $i++){
      if(
        !isset($_POST[$champs[$i]])
        || $_POST[$champs[$i]]===''
      ){
          return false;
      }
    }
    return true;
  }
    return ;
  }

$testDuFormulaire = verifierFormulaire(['nom', 'prenom', 'pseudo', 'sexe',
        'date_naissance', 'nounce', 'disponible', 'email', 'mdp']);
if($testDuFormulaire === False){
  echo "C'est Faux";
} elseif($testDuFormulaire === true) {
  if($_POST['mdp'] === $_POST['mdp2']){
  echo "Le Formulaire est valide.";
  // Traitement et enregistrements
  $sql="INSERT INTO utilisateurs (nom, prenom, pseudo, sexe, date_naissance, nounce, disponible, email, mdp)
        VALUES (' " . mysqli_real_escape_string($connection, $_POST['nom']) . " ',
                '". mysqli_real_escape_string($connection, $_POST['prenom']) . " ',
                '". mysqli_real_escape_string($connection, $_POST['pseudo']) . " ',
                '". mysqli_real_escape_string($connection, $_POST['sexe']) . " ',
                '". mysqli_real_escape_string($connection, $_POST['date_naissance']) . " ',
                '". mysqli_real_escape_string($connection, $_POST['nounce']) . " ',
                '". mysqli_real_escape_string($connection, $_POST['disponible']) . " ',
                '". mysqli_real_escape_string($connection, $_POST['email']) . " ',
                '". mysqli_real_escape_string($connection, md5($_POST['mdp'])) . " ')";
  if (mysqli_query($connection, $sql)){
      echo '<div class="alert alert-success">
      L\'enregistrement a bien été effectué</div>';
  } else {
      echo '<div class="alert alert-danger">
      L\'enregistrement de l\'adresse a échoué.';
      echo mysqli_error($connection);
      echo "<pre>$sql</pre>";
      echo '</div>';
    }
  } else {
      echo alert('danger', "Les Mots de passe ne correspondent pas.");
  }
      echo '<a href="index.html">Retours à la liste</a> </br>';
} else {
//  echo "Le Formulaire n'a pas été envoyé";
}
?>
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
          <div class="col-md-4 col-md-offset-4" id="marge">
            <div><h2>Inscription</h2></div>
          <form method="POST" action ="">
              <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
              </div>
              <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
              </div>
              <div class="form-group">
                <label for="pseudo">Pseudo :</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Pseudo">
              </div>
              <!-- <td><label for="sexe">sexe:</label></td>
              <td> <input type="radio" value="Homme" name="sexe" /> Homme</td>
              <td> <input type="radio" value="femme"  name="sexe"/> femme</td>
              </tr>-->
              <div class="form-group">
              <div id="sexe">
                <label for="sexe"> Sexe :</label>
              </div>
                <div id="h"><input type="radio" value="Homme" name="sexe" /> Homme</div>
                <div id="f"><input type="radio" value="Femme" name="sexe"/> Femme</div>
              </div>
              <div class="form-group">
                <label for="date_naissance"> Date de Naissance :</label>
                <input type="date" name="date_naissance" class="colortext">
              </div>
              <div class="form-group">
              <div id="nounce">
                <label for="nounce"> Nounce :</label>
              </div>
                <div id="nounceoui"><input type="radio" value="1" name="nounce" /> Oui</div>
                <div id="nouncenon"><input type="radio" value="0" name="nounce"/> Non</div>
              </div>
              <div class="form-group">
              <div id="disponible">
                <label for="disponible"> Disponible :</label>
              </div>
                <div id="disponibleoui"><input type="radio" value="1" name="disponible" /> Oui</div>
                <div id="disponiblenon"><input type="radio" value="0" name="disponible"/> Non</div>
              </div>
              <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="mdp">Mot de Passe :</label>
                <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de Passe">
              </div>
              <div class="form-group">
                <label for="mdp2">Confirmation Mot de Passe :</label>
                <input type="password" class="form-control" id="mdp2" name="mdp2" placeholder="Confirmation du Mot de Passe">
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
