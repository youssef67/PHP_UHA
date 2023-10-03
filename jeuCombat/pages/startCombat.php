<?php
    if (count($_SESSION["equipeA"]) == 0) {
        header("Location: indexCombat.php?winner=EquipeB");
    } elseif (count($_SESSION["equipeB"]) == 0) {
        header("Location: indexCombat.php?winner=EquipeA");
    } else {
        $equipeA = $_SESSION["equipeA"];
        $equipeB = $_SESSION["equipeB"];

        $equipeA = array_values($equipeA);
        $equipeB = array_values($equipeB);

        if ($equipeA[0]->getIsDead()) 
            header("Location: indexCombat.php?winner=EquipeB");
        else if ($equipeB[0]->getIsDead()) 
            header("Location: indexCombat.php?winner=EquipeA");

        $indexA = rand(0, count($equipeA)  - 1);
        $indexB = rand(0, count($equipeB)  - 1);
    ?>
    <h2 class="mt-5">En avant pour le combat</h2>

    <div class="row">
        <div class="col-5">
            <p>Nombre de combattant(s) dans l'équipe A : <?= count($equipeA) ?></p>
        </div> 
        <div class="col-2">
        </div>
        <div class="col-5">
            <p><p>Nombre de combattant(s) dans l'équipe B : <?= count($equipeB) ?></p></p>
        </div> 
    </div>
        <!-- Combattant séletionnés -->
    <div class="row justify-content-center">
        <div class="card col-6" style="width: 18rem;">
            <h3>Combattant selectionné pour l'équipe A</h3>
            <img src="/jeuCombat/images/<?=  $equipeA[$indexA]->getRace()->getTypeRace(); ?>.jpg" class="card-img-top solo-img" alt="image">
            <div class="card-body">
                <h5 class="card-title"><?= $equipeA[$indexA]->getPrenom() ?></h5>
                <p class="card-text">
                    <h6>Buff et Nerf</h6>
                    force : <?= $equipeA[$indexA]->getForce(); ?> (buff - <?= $equipeA[$indexA]->getArme()->getTypeArme() ?> +<?= $equipeA[$indexA]->getArme()->getBuffArme() ?> points)
                    <?= "</br>"; ?>
                    sante : <?= $equipeA[$indexA]->getSante(); ?> (buff - <?= $equipeA[$indexA]->getArmure()->getTypeArmure() ?> +<?= $equipeA[$indexA]->getArmure()->getBuffArmure() ?> points)
            </div>
        </div>
        <div class="card col-6" style="width: 18rem;">
            <h3>Combattant selectionné pour l'équipe B</h3>
            <img src="/jeuCombat/images/<?= $equipeB[$indexB]->getRace()->getTypeRace(); ?>.jpg" class="card-img-top solo-img" alt="image">
            <div class="card-body">
                <h5 class="card-title"><?= $equipeB[$indexB]->getPrenom() ?></h5>
                <h6>Buff et Nerf</h6>
                    force : <?= $equipeB[$indexB]->getForce(); ?> (buff - <?= $equipeB[$indexB]->getArme()->getTypeArme() ?> +<?= $equipeB[$indexB]->getArme()->getBuffArme() ?> points)
                    <?= "</br>"; ?>
                    sante : <?= $equipeB[$indexB]->getSante(); ?> (buff - <?= $equipeB[$indexB]->getArmure()->getTypeArmure() ?> +<?= $equipeB[$indexB]->getArmure()->getBuffArmure() ?> points)
            </div>
        </div>
    </div>
<?php
    include "components/combat.php";
    include "components/resultatCombat.php";
?>
    <div class="row">
        <div class="col-12" style="height: 100%;">
            <a href="/jeuCombat/indexCombat.php?action=startCombat" class="btn btn-primary" role="button" >Combat Suivant</a>
        </div>
    </div>
<?php 
} ?>