<?php
    $users = $database->selectAll();
?>
<div class="row">
    <div class="col m-5">
        <h2 class="display-5 text-center">Liste des users</h2>
    </div>
</div>

<?php 
    include "components/listeUsers.php";
?>