<?php 

    include "components/props.php";

    $equipeA = [];
    $equipeB = [];
    $nombreCombattantParEquipe = $_GET["nombreCombattant"] / 2;

    //Création du perso 1 à partir des tableaux de variables (Prenom, arme, armure, pouvoir, race)
    //prenom

    //Création equipe A
    for ($i = 0; $i < $nombreCombattantParEquipe; $i++) { 
        $indexPersoPrenom1 = rand(0, count($prenomArray) - 1);
        $prenomPerso1 = $prenomArray[$indexPersoPrenom1];

        //Arme
        $indexPersoArme1 = rand(0, count($armeArray) - 1);
        $armePerso1 = new Arme($armeArray[$indexPersoArme1]);
        
        //Armmure
        $indexPersoArmure1 = rand(0, count($armureArray) - 1);
        $armurePerso1 = new Armure($armureArray[$indexPersoArmure1]);
        
        //Race
        $indexPersoRace1 = rand(0, count($raceArray) - 1);
        $racePerso1 = new Race($raceArray[$indexPersoRace1]);

        $personnage1 = new Combattant($prenomPerso1, $armePerso1, $armurePerso1, $racePerso1);

        array_push($equipeA, $personnage1); 
    }

    //Création equipe B
    for ($i = 0; $i < $nombreCombattantParEquipe; $i++) { 
        $indexPersoPrenom2 = rand(0, count($prenomArray)  - 1);
        $prenomPerso2 = $prenomArray[$indexPersoPrenom2];

        //Création du perso 2 à partir des tableaux de variables (Prenom, arme, armure, pouvoir, race)  
        //Arme
        $indexPersoArme2 = rand(0, count($armeArray) - 1);
        $armePerso2 = new Arme($armeArray[$indexPersoArme2]);
        
        //Armmure
        $indexPersoArmure2 = rand(0, count($armureArray) - 1);
        $armurePerso2 = new Armure($armureArray[$indexPersoArmure2]);

        //Race
        $indexPersoRace2 = rand(0, count($raceArray) - 1);
        $racePerso2 = new Race($raceArray[$indexPersoRace2]);

        //Instanciation des 2 combattants
        $personnage2 = new Combattant($prenomPerso2, $armePerso2, $armurePerso2, $racePerso2);

        array_push($equipeB, $personnage2);          
    }

    
    //Instanciation de l'arène
    $indexArene = rand(0, count($areneArray) - 1);
    $arene =  new Arene($areneArray[$indexArene], rand(20000, 70000));

    //$_SESSION["equipe1"] = $equipeA;
    //$_SESSION["equipe2"] = $equipeB;
    $_SESSION["equipeA"] = $equipeA;
    $_SESSION["equipeB"] = $equipeB;
?>

<div class="row">
    <h2 class="col-12 mt-5">Bienvenue dans l'arène <?=  $arene->getNom()?> (capacité : <?= $arene->getCapacite() ?>) spectateurs</h2>
</div>
<div class="row">
    <div class="col-12">
        <p>Le combat va opposer 2 équipes à ma gauche l'equipe A et a ma droite le l'équipe B </p>
    </div>
</div>
<div class="row">
    <div class="col-12" style="height: 100%;">
        <a href="/jeuCombat/indexCombat.php?action=startCombat" class="btn btn-primary" role="button" >Commencer le combat</a>
    </div>
</div>
<?php for ($i = 0; $i < $nombreCombattantParEquipe; $i++) { ?>
    <div class="row">
        <div class="card col-5" style="width: 18rem;">
            <img src="/jeuCombat/images/<?=  $equipeA[$i]->getRace()->getTypeRace(); ?>.jpg" class="card-img-top solo-img" alt="image">
            <div class="card-body">
                <h5 class="card-title"><?= $equipeA[$i]->getPrenom() ?></h5>
                <p class="card-text">
                    <h6>Caractéristiques</h6>
                    <p>Race : <?= $equipeA[$i]->getRace()->getTypeRace() ?></p>
                    <p>Santé : <?= $equipeA[$i]->getSante() ?></p>
                    <p>Arme : <?= $equipeA[$i]->getArme()->getTypeArme() ?></p>
                    <p>Armure : <?= $equipeA[$i]->getArmure()->getTypeArmure() ?></p>
            </div>
        </div>
        <div class="col-2">
        </div>
        <div class="card col-5" style="width: 18rem;">
            <img src="/jeuCombat/images/<?= $equipeB[$i]->getRace()->getTypeRace(); ?>.jpg" class="card-img-top solo-img" alt="image">
            <div class="card-body">
                <h5 class="card-title"><?= $equipeB[$i]->getPrenom() ?></h5>
                <h6>Caractéristiques</h6>
                    <p>Race : <?= $equipeB[$i]->getRace()->getTypeRace() ?></p>
                    <p>Santé : <?= $equipeB[$i]->getSante() ?></p>
                    <p>Arme : <?= $equipeB[$i]->getArme()->getTypeArme() ?></p>
                    <p>Armure : <?= $equipeB[$i]->getArmure()->getTypeArmure() ?></p>

                <p class="card-text">
                </p>
            </div>
        </div>
    </div>
<?php } ?>