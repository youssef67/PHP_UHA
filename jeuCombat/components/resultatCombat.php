<?php
if($equipeA[$indexA]->getIsDead()) { 
?>
<div class="row justify-content-center">
    <div class="col">
        <p><?= $equipeA[$indexA]->getPrenom(); ?> est mort !</p>
        <p><?= $equipeB[$indexB]->getPrenom(); ?> sort vainqueur du combat !</p> 
    </div>
</div>
<?php
    unset($_SESSION["equipeA"][$indexA]);
} else { 
?>
<div class="row justify-content-center">
    <div class="col">
        <p><?= $equipeB[$indexB]->getPrenom(); ?> est mort !</p>
        <p><?= $equipeA[$indexA]->getPrenom(); ?> sort vainqueur du combat !</p> 
    </div>
</div>
<?php
    unset($_SESSION["equipeB"][$indexB]);
}
?>