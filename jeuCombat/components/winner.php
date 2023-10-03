<div class="row">
    <h2 class="col-12 text-center mt-5">Resultat du game</h2>
</div>
<?php 
    if ($_GET["winner"] == "EquipeA") {
?>
    <p>L'équipe A est gagnante</p>
<?php
    } else {

?>
    <p>L'équipe B est gagnante</p>
<?php
    }
?>