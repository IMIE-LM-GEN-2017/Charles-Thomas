<?php
$afficherFormulaire = false;

if(isset($_POST['id']) && !empty($_POST['id'])){
    $testDuFormulaire = verifierFormulaire(['nom', 'prenom', 'email', 'tel', 'id_adresse']);
    if($testDuFormulaire === false){
        echo 'Le formulaire est incomplet';
    }elseif($testDuFormulaire === true){
        $sql = "UPDATE dirigeants SET
  nom = '".mysqli_real_escape_string($connection, $_POST['nom'])."',
  prenom = '".mysqli_real_escape_string($connection, $_POST['prenom'])."',
  email = '".mysqli_real_escape_string($connection, $_POST['email'])."',
  tel = '".mysqli_real_escape_string($connection, $_POST['tel'])."',
  id_adresse = '".mysqli_real_escape_string($connection, $_POST['id_adresse'])."'
  WHERE id=".mysqli_real_escape_string($connection, $_POST['id']);

        if(!mysqli_query($connection, $sql)){
            echo "Erreur : " .mysqli_error($connection);
        } else {
            echo "l'enregistrement a été mis a jour"
                . "<br><a href=\"dirigeant.php\">Retours à la liste</a>";
        }
    }

    $testDuFormulaire = verifierFormulaire(
        ['mdpa', 'mdp', 'mdp2']
    );
    if($testDuFormulaire === true){
        //Vérifier l'ancien mot de passe
        $sql= "SELECT id FROM dirigeants WHERE id="
            .mysqli_real_escape_string($connection, $_POST['id'])
            ." AND mdp='"
            .mysqli_real_escape_string($connection, md5($_POST['mdpa']))
            ."'";
        $resultat = executerRequete($connection, $sql);
        if($resultat !== false && mysqli_num_rows($resultat) === 1){

            if($_POST['mdp'] === $_POST['mdp2']){
                $sql = "UPDATE dirigeants SET mdp='"
                    .mysqli_real_escape_string($connection, md5($_POST['mdp']))
                    ."' WHERE id="
                    .mysqli_real_escape_string($connection, $_POST['id'] );

                if(executerRequete($connection, $sql) !==false){
                    alert('success', 'mot de passe mis à jour');
                }
            } else {
                alert('danger', 'Les mots de passe ne correspondent pas');
            }
        } else {
            alert ('danger', 'Mot de passe actuel incorret');
        }
    }

} elseif (isset($_GET['id']) && !empty($_GET['id'])){
    //Requete pour selectionner le dirigeant
    $sql = "SELECT * FROM utilisateurs WHERE id="
        .mysqli_real_escape_string($connection, $_GET['id']);

    //Est ce que la requete a echoue ?
    if(!$resultat = mysqli_query($connection, $sql)){
        echo "Erreur SQL :" .mysqli_error($connection);
    } else {
        //Est ce qu'on a au moins un enregistrement ?
        if(mysqli_num_rows($resultat)>0){
            $dirigeant = mysqli_fetch_assoc($resultat);
            $afficherFormulaire = true;
            var_dump($dirigeant);
        } else {
            echo "Ce dirigeant n'existe pas";
        }
    }
} else {
    echo "Pas d'id";
}

$sql="SELECT * FROM adresses";
if(!$adresses = mysqli_query($connection, $sql)){
    echo '<div class="alert alert-danger"> Une erreur est survenue'
        . mysqli_error($connection)
        . '</div>';
}

if($afficherFormulaire === true):