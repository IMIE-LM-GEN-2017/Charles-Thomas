<?php
  //test de connexion
$connexion = verificationuser(['id','mdp']);

if($connexion === true){
  $sql = "SELECT id FROM utilisateurs WHERE id="
          .mysqli_real_escape_string($connection, $_POST['id'])
          ." AND mdp='"
          .mysqli_real_escape_string($connection, md5($_POST['mdp']))
          ."'".
  $resultat = requete($connection,$sql);
  if($resultat !== false && mysqli_num_rows($resultat) ===1){
      echo "L'identifiant ou le mot de passe ne corresponde pas"
  } else {
    $resultat = true
  }
}
 ?>







<?php
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
   if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

      $base = mysql_connect ('localhost', 'root', '');
      mysql_select_db ('test', $base);

      // on teste si une entrée de la base contient ce couple login / pass
      $sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($_POST['login']).'" AND pass_md5="'.mysql_escape_string(md5($_POST['pass'])).'"';
      $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
      $data = mysql_fetch_array($req);

      mysql_free_result($req);
      mysql_close();

      // si on obtient une réponse, alors l'utilisateur est un membre
      if ($data[0] == 1) {
         session_start();
         $_SESSION['login'] = $_POST['login'];
         header('Location: membre.php');
         exit();
      }
      // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
      elseif ($data[0] == 0) {
         $erreur = 'Compte non reconnu.';
      }
      // sinon, alors la, il y a un gros problème
      else {
         $erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
      }
   }
   else {
      $erreur = 'Au moins un des champs est vide.';
   }
}
?>
