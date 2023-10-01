<?php 

    include "components/props.php";


    //Création du perso 1 à partir des tableaux de variables (Prenom, arme, armure, pouvoir, race)
    //prenom
    $indexPersoPrenom1 = rand(0, count($prenomArray)  - 1);
    $prenomPerso1 = $prenomArray[$indexPersoPrenom1];
    $indexPersoPrenom2 = rand(0, count($prenomArray)  - 1);
    $prenomPerso2 = $prenomArray[$indexPersoPrenom2];
    unset($prenomArray[$indexPersoPrenom1]);
    unset($prenomArray[$indexPersoPrenom2]);

    //Arme
    $indexPersoArme1 = rand(0, count($armeArray) - 1);
    $armePerso1 = new Arme($armeArray[$indexPersoArme1]);
    
    //Armmure
    $indexPersoArmure1 = rand(0, count($armureArray) - 1);
    $armurePerso1 = new Armure($armureArray[$indexPersoArmure1]);
    
    //Race
    $indexPersoRace1 = rand(0, count($raceArray) - 1);
    $racePerso1 = new Race($raceArray[$indexPersoRace1]);

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
    $personnage1 = new Combattant($prenomPerso1, $armePerso1, $armurePerso1, $racePerso1);
    $personnage2 = new Combattant($prenomPerso2, $armePerso2, $armurePerso2, $racePerso2);


    //Instanciation de l'arène
    $indexArene = rand(0, count($areneArray) - 1);
    $arene =  new Arene($areneArray[$indexArene], rand(20000, 70000));

    $_SESSION["equipe1"] = serialize($personnage1);
    $_SESSION["equipe2"] = serialize($personnage2);
?>

<div class="row">
    <h2 class="col-12 mt-5">Bienvenue dans l'arène <?=  $arene->getNom()?> (capacité : <?= $arene->getCapacite() ?>) spectateurs</h2>
</div>
<div class="row">
    <div class="col-12">
        <p>Le combat va opposer 2 farouches combattant à ma gauche le combattant <span style="font-weight: bolder;"><?= strtoupper($personnage1->getPrenom()); ?></span>
        et a ma droite le combattant <span style="font-weight: bolder;"><?= strtoupper($personnage2->getPrenom()); ?></span>
        </p>
    </div>
</div>
<div class="row">
    <div class="card col-5" style="width: 18rem;">
        <img src="/jeuCombat/images/<?=  $personnage1->getRace()->getTypeRace(); ?>.jpg" class="card-img-top solo-img" alt="image">
        <div class="card-body">
            <h5 class="card-title"><?= $personnage1->getPrenom() ?></h5>
            <p class="card-text">
                <h6>Caractéristiques</h6>
                <p>Race : <?= $personnage1->getRace()->getTypeRace() ?></p>
                <p>Arme : <?= $personnage1->getArme()->getTypeArme() ?></p>
        </div>
    </div>
    <div class="col-2" style="height: 100%;">
        <a href="/jeuCombat/indexCombat.php?action=soloStart" class="btn btn-primary" role="button" >Commencer le combat</a>
    </div>
    <div class="card col-5" style="width: 18rem;">
        <img src="/jeuCombat/images/<?=  $personnage2->getRace()->getTypeRace(); ?>.jpg" class="card-img-top solo-img" alt="image">
        <div class="card-body">
            <h5 class="card-title"><?= $personnage2->getPrenom() ?></h5>
            <h6>Caractéristiques</h6>
                <p>Race : <?= $personnage2->getRace()->getTypeRace() ?></p>
                <p>Arme : <?= $personnage2->getArme()->getTypeArme() ?></p>
            <p class="card-text">
            </p>
        </div>
    </div>
</div>