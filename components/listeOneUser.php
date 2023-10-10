<?php 
    $userBdd = new User();

    // Si recherche 
    if (isset($_POST["select-fieldSearch"]) && !empty($_POST["select-fieldSearch"])) {
        echo "<h2 style='margin: 30px;'>Détail du user</h2>";
        $col = $_POST["select-fieldSearch"];
        $value = $_POST["select-valueSearch"];

        $user = $userBdd->selectOne($col, $value);
    //Si update
    } else {
        echo "<h2 style='margin: 30px;'>Entrée validée</h2>";
        echo "<h3>Récapitulatif du nouvel utilisateur</h3>";
        $user = $userBdd->insert($_POST["prenom"], $_POST["nom"], $_POST["identifiant"], $_POST["password"], $_POST["role"]);
    }
?>
<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">User Id</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Role</th>
                    <?php   if(isset($_SESSION["adminOk"])) { ?>
                        <th scope="col">Action</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    echo "<tr>";
                        echo "<td>" . $user[0] . "</td>";
                        echo "<td>" . $user[1] . "</td>";
                        echo "<td>" . $user[2] . "</td>";
                        echo "<td>" . $user[4] . "</td>";
                        echo "<td>" . $user[3] . "</td>";
                        if(isset($_SESSION["adminOk"])) {
                            echo '<td> <a href="index.php?action=updateUser&id_user=' . $user[0] .'" class="btn btn-primary active m-2" role="button" aria-pressed="true">Modifier</a>';
                            echo '<a href="index.php?action=deleteUser&id_user=' . $user[0] .'" class="btn btn-secondary active" role="button" aria-pressed="true">Supprimer</a></td>';
                        }
                        
                    echo "</tr>";
                ?>
            </tbody>
        </table>
    </div>
</div>
                     
