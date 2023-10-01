<?php
    $lastInsertId = $database->insertEntry($_POST["prenom"], $_POST["nom"], $_POST["identifiant"], $_POST["password"], $_POST["role"]);
?>