<?php
    while($equipeA[$indexA]->getSante() > 0 && $equipeB[$indexB]->getSante() > 0) {
        if ($equipeA[$indexA]->getSante() > 0) {
            $couleurCard = "#e93f32";
            $attaquant = $equipeA[$indexA];
            $defenseur = $equipeB[$indexB];
            $attaquant->lanceUneAttaque($defenseur);
            $equipe = " de l'equipe A";
            include "actionCombat.php";
        }

        if ($equipeB[$indexB]->getSante() > 0) {
            $couleurCard = "green";
            $attaquant = $equipeB[$indexB];
            $defenseur = $equipeA[$indexA];
            $attaquant->lanceUneAttaque($defenseur);
            $equipe = " de l'equipe B";
            include "actionCombat.php";
        }
    }
?>
