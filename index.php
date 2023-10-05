<?php
    session_start();
    require_once("classes/database.class.php");
    require_once("classes/users.class.php");

    // Si formulaire de connexion envoyé, création des variables de session
    // if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["identifiant"]) && isset($_POST["password"])) {
    //     $_SESSION["adminOk"] = $database->checkIfAdmin($_POST["identifiant"], $_POST["password"]);
    //     $_SESSION["adminOk"] ? header("Location: index.php?nomPage=adminDisconnect") : header("Location: index.php?nomPage=adminConnect&error=true");
    // }
    
    // // Si demande de connexion, suppresion des varaibles de sessions
    // if (isset($_GET["deconnexion"]) && $_GET["deconnexion"] == "ok") {
    //     session_destroy();
    //     header("Location: index.php?nomPage=accueil");
    // }
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
        <?php include "components/header.php"; ?>
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
                    if ($_SERVER['REQUEST_METHOD'] == "GET" && !empty($_GET["action"])) {
                         if ($_GET["action"] != "adminConnect") {
                             include "components/smallMenu.php";
                             include "pages/".$_GET["action"].".php"; 
                        }
                         else
                            include "pages/".$_GET["action"].".php";
                     } 
                }

                // Après validation des formulaires - Appel des requêtes SQL 
                if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_GET["action"])) {
                    // Pour afficher un seul user
                    if ($_GET["action"] == "selectOne") {
                        include "components/smallMenu.php";
                        include "components/listeOneUser.php";
                    // Pour inserer un user en base de donnée   
                    } elseif ($_GET["action"] == "insert") {
                        include "components/smallMenu.php";
                        
                        //liste des users MAJ
                        include "components/listeOneUser.php";
                    // Pour modifier ou inserer un utilisateur
                    } else  {
                        include "components/smallMenu.php";
                        if (isset($_POST["editUser"])) {
                            //Requete SQL pour recupérer les données du user à mettre à jour + affiche du forumlaire avec les données
                            $user = $database->selectEntryByValue("user_id", $_POST["editUser"]);
                            include "components/updateUser.php";
                        }
                        // requete pour supprimer un utilisateur
                        if (isset($_POST["deleteUser"])) {
                            $database->deleteEntry($_POST["deleteUser"]);
                            $entryDelete = true;
                        }
                    }
                }

                // Mise a jour du user dans la base SQL
                if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["nom-valide"]) && !empty($_POST["nom-valide"])) {
                    $database->updateEntry($_POST["id"], $_POST["prenom"], $_POST["nom-valide"], $_POST["identifiant"], $_POST["role"]);

                    $editOk = true;

                    // Affichage de la liste des users avec les modifications effectuées
                    include "pages/updateDeleteOne.php";
                }

                // Affichage de la liste des users avec l'entrée effacée
                if (isset($entryDelete) && $entryDelete) {
                    include "pages/updateDeleteOne.php";
                }        
            ?>  
        </div>
    </body>
</html>

