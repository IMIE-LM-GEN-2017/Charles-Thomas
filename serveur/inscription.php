<?php
require_once('include/db.php');
require_once('include/function.php');
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
$testDuFormulaire = verifierFormulaire(['nom', 'prenom', 'pseudo', 'sexe',
        'date_naissance', 'nounce', 'email', 'mdp', 'confirmation_mdp']);
if($testDuFormulaire === False){
  echo "C'est Faux";
} elseif($testDuFormulaire === true) {
  if($_POST['mdp'] === $_POST['confirmation_mdp']){
  echo "Le Formulaire est valide.";
  // Traitement et enregistrements
  $sql="INSERT INTO utilisateurs (nom, prenom, pseudo, sexe, date_naissance, nounce, email, mdp, confirmation_mdp)
        VALUES (' " . mysqli_real_escape_string($connection, $_POST['nom']) . " ',
                '". mysqli_real_escape_string($connection, $_POST['prenom']) . " ',
                '". mysqli_real_escape_string($connection, $_POST['pseudo']) . " ',
                '". mysqli_real_escape_string($connection, $_POST['sexe']) . " ',
                '". mysqli_real_escape_string($connection, $_POST['date_naissance']) . " ',
                '". mysqli_real_escape_string($connection, $_POST['nounce']) . " ',
                '". mysqli_real_escape_string($connection, $_POST['email']) . " ',
                '". mysqli_real_escape_string($connection, md5($_POST['mdp'])) . " ',
                '". mysqli_real_escape_string($connection, md5($_POST['confirmation_mdp'])) . " ')";
  //var_dump($sql);
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
  echo "Le Formulaire n'a pas été envoyé";
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
              <tr>
              <div id="date_naissance">
              <td> <label for="date_naissance"> Date de Naissance :</label> </td>
              <td><select name="date_naissance" id="jour" class="colortext">  <option value="">Jour</option><!--le jour-->
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
                 <option value="7">7</option>
                 <option value="8">8</option>
                 <option value="9">9</option>
                 <option value="10">10</option>
                 <option value="11">11</option>
                 <option value="12">12</option>
                 <option value="13">13</option>
                 <option value="14">14</option>
                 <option value="15">15</option>
                 <option value="16">16</option>
                 <option value="17">17</option>
                 <option value="18">18</option>
                 <option value="19">19</option>
                 <option value="20">20</option>
                 <option value="21">21</option>
                 <option value="22">22</option>
                 <option value="23">23</option>
                 <option value="24">24</option>
                 <option value="25">25</option>
                 <option value="26">26</option>
                 <option value="27">27</option>
                 <option value="28">28</option>
                 <option value="29">29</option>
                 <option value="30">30</option>
                 <option value="31">31</option>
              </select></td>

              <td><select name="date_naissance" id="mois" class="colortext">  <option value="" >Mois</option><!--le mois-->
                <option value="1">Janvier</option>
                <option value="2">Février</option>
                <option value="3">Mars</option>
                <option value="4">Avril</option>
                <option value="5">Mai</option>
                <option value="6">Juin</option>
                <option value="7">Juillet</option>
                <option value="8">Août</option>
                <option value="9">Septembre</option>
                <option value="10">Octobre</option>
                <option value="11">Novembre</option>
                <option value="12">Décembre</option>
              </select></td>

              <td><select  name="date_naissace" id="annee" class="colortext">  <option value="">Année</option><!--l'année-->
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                </select>
                </div>
              </div>
              <div class="form-group">
              <div id="nounce">
                <label for="nounce"> Nounce :</label>
              </div>
                <div id="local"><input type="radio" value="local" name="nounce" /> Nounce</div>
                <div id="voyageur"><input type="radio" value="voyageur" name="nounce"/> Voyageur</div>
              </div>
              <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="mdp">Mot de Passe :</label>
                <input type="password" class="form-control" id="mdp" placeholder="Mot de Passe">
              </div>
              <div class="form-group">
                <label for="confirmation_mdp">Confirmation Mot de Passe :</label>
                <input type="password" class="form-control" id="confirmation_mdp" placeholder="Confirmation du Mot de Passe">
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
