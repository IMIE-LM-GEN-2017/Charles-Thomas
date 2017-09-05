<?php
$server = "vagrant";
$username = "vagrant";
$password = "123";
$db = "";
// Création de la connexion:
$connection = mysqli_connect( $server, $username, $password, $db );

// Test de la connexion:
if(!$connection){
  echo "Erreur:".mysqli_connect_error();
  die('Impossible de se connecter à la base de données');
}
