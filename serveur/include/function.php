<?php
function verifierFormulaire($champs){
  if(count($_POST)>0){
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
?>
