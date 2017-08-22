<?php
  //lien de connection
  require_once('include/db.php');
  require_once('include/function.php');

  //lien header
  $titrePage= "Recherche";
  include('design/header.php');
?>
  <div class="container-fluid">
    <div class="row">
      <!-- Profil -->
      <?php for($i=0; $i<100; $i++): ?>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
         <img src="img/profil.jpg" alt="...">
         <div class="caption">
           <h3>Pseudo</h3>
           <h5><strong>Pays:</strong> label</h5>
           <h5><strong>Ville:</strong> label</h5>
           <h5><strong>Age:</strong> label</h5>
           <h5><strong>Sexe:</strong> label</h5>
           <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
         </div>
       </div>
      </div>
    <?php endfor ?>

    </div>
  </div>
