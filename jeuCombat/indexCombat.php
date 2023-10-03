<?php
    require_once("classes/database.class.php");
    require_once("classes/combattant.class.php");
    require_once("classes/arme.class.php");
    require_once("classes/armure.class.php");
    require_once("classes/race.class.php");
    require_once("classes/arene.class.php");
    session_start();

    $database = new Database();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Site POO</title>
        <link href="styles.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head> 
    <body>
        <!-- Chargement du header -->   
        <?php include "components/headerCombat.php"; ?>
        <div class="container-fluid text-center">         
            <?php 

                if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["nombreCombattant"])) {
                    if ($_GET["nombreCombattant"] % 2 == 0) {
                        include "pages/presentation.php";
                    } else {
                        echo "Veuillez définir un nombre pair";
                        include "components/typeGame.php";
                    }
                } elseif ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["action"]) && $_GET["action"] == "startCombat") {
                    include "pages/startCombat.php";
                } elseif ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["winner"]) && !empty($_GET["winner"]))
                    include "components/winner.php";
                else {
                    include "components/typeGame.php";
                }
               
            ?>
        </div>
        <script src="script.js"></script>
    </body>
</html>