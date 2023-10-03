<div class="row justify-content-center">
    <div class="card text-center mb-3 col-4 col align-self-center" style="width: 18rem; background-color:<?= $couleurCard ?>;">
        <div class="card-body text-center">
            <h5 class="card-title"><?= $attaquant->getPrenom().$equipe; ?> </h5>
            <p class="card-text text-nowrap">Lance une attaque de <?= $attaquant->getForce(); ?> points</p>
            <p class="card-text text-nowrap">La vie de <?= $defenseur->getPrenom(); ?> est passée à <?= $defenseur->getSante(); ?></p>
            <p class="card-text text-nowrap"><?= $attaquant->getPrenom(); ?> obtient <?= $attaquant->getGainExperienceAttaque(); ?> points d'experience</p>
            <p class="card-text text-nowrap"><?= 100 - $attaquant->getExperience(); ?> points d'experience avant augmentation</p>
        </div>
        <?php if ($attaquant->getPassageExperience()) { 
            $attaquant->resetPassageExperience();    
        ?>
        <div class="card-footer bg-transparent border-success" style="background-color:blue !important;">
        <?= $attaquant->getPrenom(); ?> a gagné en expérience, dorenavant son attaque occasionne <?= $attaquant->getForce(); ?> points 
        </div>
        <?php } ?>
    </div>
</div>
