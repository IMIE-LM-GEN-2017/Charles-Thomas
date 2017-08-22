<?php
//lien de connection
require_once('include/db.php');
require_once('include/function.php');

//lien header
$titrePage= "";
/*include('design/header.php');*/

$testFormulaire= verifierFormulaire(['nom','prenom','pseudo','InputEmail','mdp','mdp2']);

if($testFormulaire === false){
  echo "C'est faux";
  var_dump($_POST);

} elseif ($testFormulaire ===true){
  if($_POST['mdp']===$_POST['mdp2']){
  echo "Le formulaire est valide";
  // traitement et enregistrement
  $sql="INSERT INTO utilisateurs (nom ,prenom, pseudo, email, mdp, confirmation_mdp)
        VALUES ('" .mysqli_real_escape_string($connection, $_POST['nom']) ." ',
                '" .mysqli_real_escape_string($connection, $_POST['prenom']) ." ',
                '" .mysqli_real_escape_string($connection, $_POST['pseudo']) ." ',
                '" .mysqli_real_escape_string($connection, $_POST['InputEmail']) ." ',
                '" .mysqli_real_escape_string($connection, md5($_POST['mdp'])) ." ',
                '" .mysqli_real_escape_string($connection, md5($_POST['mdp2'])) ." ')";


  if(mysqli_query($connection, $sql)){
    echo '<div class="alert alert-success">
    L\'enregistrement a bien été éffectué </div>';
  }else{
  echo'<div class="alert alert-danger">L\'enregistrement à échoué <br>';
  echo mysqli_error($connection);
  echo '</div>';
  }
} else {
  echo
        "Les mots de passe ne corresponde pas";
}
  echo'<a href="recherche.php"> Retours à la liste </a>';
} else {
  echo alert('danger', "Les mots de passe ne correspondent pas");
}

if($testFormulaire !== true):

  $sql="SELECT * FROM utilisateurs";
  if(!$adresses = mysqli_query($connection, $sql)):
    echo '<div class="alert alert-danger"> Une erreur est survenue'
      . mysqli_error($connection)
      . '</div>';
  else:
?>

    <div class="container-fluid">
        <div class="row home">
          <div class="col-md-12 mg"></div>
          <div class="col-md-4 col-md-offset-4">
            <form action="inscription.php" mathod="POST">
              <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom">
              </div>
              <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" placeholder="Prenom">
              </div>
              <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" placeholder="Pseudo">
              </div>
              <div class="form-group">
                <label for="InputEmail">Email address</label>
                <input type="email" class="form-control" id="InputEmail" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="mdp">Password</label>
                <input type="password" class="form-control" id="mdp" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="mdp2">Confirmation Password</label>
                <input type="password" class="form-control" id="mdp2" placeholder="Confirmer Password">
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

  <?php
  endif;
  endif;
  include ('design/footer.php');
  ?>
