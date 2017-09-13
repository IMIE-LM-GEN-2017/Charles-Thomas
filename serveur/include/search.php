<?php
$liste = ['user', 'pays', 'sexe', 'age', 'date']

$sql = "SELECT u.pays, u.sexe, u.age, u.date FROM user u";

$ordre = OrderBy ($liste , 'user');

if(isset($_POST['id']) && !empty($_POST['id'])){
  $database = verifierdata(['pays', 'nationalité','date', 'age']);
  if($database === false){
    echo
  } elseif($database === true){
    $sql = " WHERE users SET
    pays = '".mysql_real_escape_string($connection, $_POST['pays'])."',
    nationalite = '".mysql_real_escape_string($connection, $_POST['nationalité'])."',
    date = '".mysql_real_escape_string($connection, $_POST['date'])."',
    age = '".mysql_real_escape_string($connection, $_POST['age'])."'
    WHERE id=".mysqli_real_escape_string($connection, $_POST['id']);
  }
}

?>
