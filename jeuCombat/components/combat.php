<?php
    while($equipe1->getSante() > 0 && $equipe2->getSante() > 0) {
        if ($equipe1->getSante() > 0) {
            $couleurCard = "#e93f32";
            $attaquant = $equipe1;
            $defenseur = $equipe2;
            $equipe1->lanceUneAttaque($defenseur);
            include "actionCombat.php";
        }

        if ($equipe2->getSante() > 0) {
            $couleurCard = "green";
            $attaquant = $equipe2;
            $defenseur = $equipe1;
            $attaquant->lanceUneAttaque($defenseur);
            include "actionCombat.php";
        }
    }
?>
<!-- <?php if($equipe1->getIsDead()) { ?>
<div class="row justify-content-center">
    <div class="col">
        <p><?= $equipe1->getPrenom(); ?> est mort !</p>
        <p><?= $equipe2->getPrenom(); ?> sort vainqueur du combat !</p> 
    </div>
</div>
<?php } else { ?>

<?php } ?> -->