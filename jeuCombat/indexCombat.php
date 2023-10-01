<?php
    session_start();

    require_once("classes/database.class.php");
    require_once("classes/combattant.class.php");
    require_once("classes/arme.class.php");
    require_once("classes/armure.class.php");
    require_once("classes/race.class.php");
    require_once("classes/arene.class.php");
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

                if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["typeGame"]) && ($_GET["typeGame"] == "solo" || $_GET["typeGame"] == "trio")) {
                    include "pages/solo.php";
                } elseif ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["action"])) {
                    if ($_GET["action"] == "soloStart") {
                        include "pages/soloStart.php";
                    }
                }
                else {
                    include "components/typeGame.php";
                }

               
            ?>
        </div>
        <script src="script.js"></script>
    </body>
</html>