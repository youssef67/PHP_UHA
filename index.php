<?php
    session_start();
    require_once("classes/database.class.php");
    require_once("classes/users.class.php");

    $userBdd = new User();
    // Si formulaire de connexion envoyé, création des variables de session
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["identifiant"]) && isset($_POST["password"])) {
        $_SESSION["adminOk"] = $userBdd->checkIfAdmin($_POST["identifiant"], $_POST["password"]);
        $_SESSION["adminOk"] ? header("Location: index.php?nomPage=adminDisconnect") : header("Location: index.php?nomPage=adminConnect&error=true");
    }
    
    // // Si demande de connexion, suppresion des varaibles de sessions
    if (isset($_GET["deconnexion"]) && $_GET["deconnexion"] == "ok") {
        session_destroy();
        header("Location: index.php?nomPage=accueil");
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Site POO</title>
        <link href="styles.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head> 
    <body>
        <!-- Chargement du header -->   
        <?php include "pages/header.php"; ?>
        <div class="container-fluid text-center">         
            <?php 
                if (count($_GET) == 0 || !empty($_GET["nomPage"])) {
                    if ($_SERVER['REQUEST_METHOD'] == "GET" && !empty($_GET["nomPage"])) {
                        if (file_exists("pages/".$_GET["nomPage"].".php")) {
                            include "pages/".$_GET["nomPage"].".php";
                        } else {
                            echo "Le fichier <span>". strtoupper($_GET["nomPage"].".PHP") ."</span> n'existe pas";
                        }
                    } else 
                        include "pages/accueil.php";                 
                } else {
                    if ($_SERVER['REQUEST_METHOD'] == "GET" && !empty($_GET["action"]) && $_GET["action"] != "deleteUser") {
                        if ($_GET["action"] != "adminConnect") {
                             include "pages/".$_GET["action"].".php"; 
                        }
                         else
                            include "pages/".$_GET["action"].".php";
                     } 
                }

                // Après validation des formulaires - Appel des requêtes SQL 
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    if ($_GET["action"] == "formInsert" || $_GET["action"] == "formUpdate")                       
                        include "pages/listUsers.php";
                } elseif(isset($_GET["action"]) && $_GET["action"] == "deleteUser") 
                        include "pages/listUsers.php";  
            ?>  
        </div>
    </body>
</html>

