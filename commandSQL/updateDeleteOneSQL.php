<?php
    if (isset($_POST["deleteUser"])) {
    $database->deleteEntry($field[0]);
    }
?>