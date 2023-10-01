<?php
    $equipe1 = unserialize($_SESSION["equipe1"]);
    $equipe2 = unserialize($_SESSION["equipe2"]);

// Faire un foreach pour afficher l'ensemble des combattants présents dans les variables de sessions
?>
<h2 class="mt-5">En avant pour le combat</h2>


<div class="row justify-content-center">
        <div class="col-4 col-sm-6">
            <div class="card-header"><?= $equipe1->getPrenom() ?></div>
            <div class="card-body text-primary">
                <p>
                    force : <?= $equipe1->getForce(); ?> (buff - <?= $equipe1->getArme()->getTypeArme() ?> +<?= $equipe1->getArme()->getBuffArme() ?> points)
                </p>
                <p>
                    sante : <?= $equipe1->getSante(); ?> (buff - <?= $equipe1->getArmure()->getTypeArmure() ?> +<?= $equipe1->getArmure()->getBuffArmure() ?> points)
                </p>
            </div>
        </div>
        <div class="col-4 col-sm-6">
            <div class="card-header"><?= $equipe2->getPrenom() ?></div>
            <div class="card-body text-primary">
                <p class="justify-content-center">
                    force : <?= $equipe2->getForce(); ?> (buff - <?= $equipe2->getArme()->getTypeArme() ?> +<?= $equipe2->getArme()->getBuffArme() ?> points)
                </p>
                <p>
                    sante : <?= $equipe2->getSante(); ?> (buff - <?= $equipe2->getArmure()->getTypeArmure() ?> +<?= $equipe2->getArmure()->getBuffArmure() ?> points)
                </p>
            </div>
        </div>
</div>
<?php
    include "components/combat.php";
?>