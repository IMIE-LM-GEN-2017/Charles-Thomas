<?php
function verifierFormulaire($champs){
  if(count($_POST)>0){
<<<<<<< HEAD
  for($i=0; $i<count($champs); $i++){
    if(
      !isset($_POST[$champs[$i]])
      || empty($_POST[$champs[$i]])
    ){
      var_dump($champs[$i]);
      return false;
    }
  }
  return true;
}
return null;
}

function alert ($type, $message){
  echo "<div class=\alert alert-$type\">$message</div>";
}

=======
    for($i=0; $i<count($champs); $i++){
      if(
        !isset($_POST[$champs[$i]])
        || empty($_POST[$champs[$i]])
      ){
          return false;
      }
    }
    return true;
  }
    return null;
  }
>>>>>>> Developpement
?>
