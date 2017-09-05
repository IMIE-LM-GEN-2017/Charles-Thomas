<?php
//lien de connection
require_once('include/db.php');
require_once('include/function.php');

//lien header
$titrePage = "Nounce";
include('design/header.php');

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 foo">
            <h2>Nounce c'est quoi ?</h2>
            <p class="para">
                Professionnel ou amical, Nounce est une communauté d'expatrier qui cherche à s'entraider
                La plateforme est destinée aux personnes souhaitant s'expatrier ou étant déjà eux-mêmes expatrier.
                Cette mise en relation permet d'avoir des possibilités et des facilités dans un éventuel changement de
                vie.
            </p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-6 foo">
            <h2>Comment ça marche ?</h2>
            <div class="para"> Le fonctionnement repose sur deux principes :
                <p><strong>La Solidarité</strong><br>
                    L'un des grand principe est basé sur l'entraide, les expatriers sont la pour
                    aider leur futur congénère dans ce périple.
                </p>
                <p><strong>L'échange</strong><br>
                    Il permet aussi un échange entre les divers utilisateurs leurs
                    permettant d'etoffer leur reseaux sur place et ainsi avoir une meilleur
                    intégration.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 foo">
            <h2>Le services Nounce</h2>
            <p class="para">
                Nous vous proposons une recherche des potentiels expatriers sur votre futur territoire,
                vous pouvez ainsi vous mettre en relation et commercer à échanger.
            </p>
        </div>
    </div>
</div>


<?php
include('design/footer.php');
?>
