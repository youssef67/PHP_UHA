<?php 
    if ($_GET["action"] == "selectOne") {
        echo "<h2 style='margin: 30px;'>Détail du user</h2>";
    } else {

        echo "<h2 style='margin: 30px;'>Entrée validée</h2>";
        echo "<h3>Récapitulatif du nouvel utilisateur</h3>";
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
                    <?php  if($_GET["action"] == "updateDeleteOne") { 
                        echo '<th scope="col">Action</th>';
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    echo "<tr>";
                        echo "<td>" . $user[0][0] . "</td>";
                        echo "<td>" . $user[0][1] . "</td>";
                        echo "<td>" . $user[0][2] . "</td>";
                        echo "<td>" . $user[0][4] . "</td>";
                        echo "<td>" . $user[0][3] . "</td>";
                        if($_GET["action"] == "updateDeleteOne") {
                            echo '<td> <a href="#" class="btn btn-primary active m-2" role="button" aria-pressed="true">Modifier</a>';
                            echo '<a href="#" class="btn btn-secondary active" role="button" aria-pressed="true">Supprimer</a>';
                        }
                        
                    echo "</tr>";
                ?>
            </tbody>
        </table>
    </div>
</div>