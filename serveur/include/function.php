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

  function utilisateurEstIdentifie(){
  return isset($_SESSION)
         && isset($_SESSION['utilisateur'])
         && isset($_SESSION['utilisateur']['id']);
}
?>
