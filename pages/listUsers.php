<div class="row">
    <div class="col m-5">
<?php
    $userBdd = new User();

    // Affichage pour un seul user
    if (isset($_GET["select-fieldSearch"]) && !empty($_GET["select-fieldSearch"])) {
        $users = $userBdd->selectOne($_GET["select-fieldSearch"], $_GET["select-valueSearch"]);
        echo "<h2>Détail de l'utilisateur</h3>";
    }
    // Affichage en cas d'insertion
    elseif(isset($_POST["insert-prenom"]) && !empty($_POST["insert-prenom"])) {
        $users = $userBdd->insert($_POST["insert-prenom"], $_POST["insert-nom"], $_POST["insert-identifiant"], $_POST["insert-password"], $_POST["insert-role"]);
        echo "<h2 style='margin: 30px;'>Entrée validée</h2>";
        echo "<h3>Récapitulatif du nouvel utilisateur</h3>";
    }
    // Affichage en cas de modification
    elseif(isset($_GET["action"]) && $_GET["action"] == "formUpdate") {
        $userBdd->update($_POST["id"], $_POST["prenom"], $_POST["nom-valide"], $_POST["identifiant"], $_POST["role"]);
        $users = $userBdd->selectOne("user_id", $_POST["id"]);
        echo "<h2 style='margin: 30px;'>Entrée modifiée</h2>";
        echo "<h3>Récapitulatif des modifications</h3>";
    }
    elseif(isset($_GET["action"]) && $_GET["action"] == "deleteUser") {
        $userBdd->delete($_GET["id_user"]);
        $users = $userBdd->selectAll();
        echo "<h2 style='margin: 30px;'>Entrée supprimée</h2>";
        echo "<h3>Liste des users à jour</h3>";
    }  
    else {
        $users = $userBdd->selectAll();
        echo "<h2 style='margin: 30px;'>Liste des utilisateurs</h2>";
    }
?>
    </div>
</div>

<?php   if(isset($_SESSION["adminOk"])) { ?>
<div class="row">
    <div class="col">
        <a href="index.php?action=formInsert" class="btn btn-primary active m-2" role="button" aria-pressed="true">Ajouter un utilisateur</a>
    </div>
</div>
<?php } ?>
<div class="row mt-5">
    <div class="col">
        <form action="" method="POST">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">User Id</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Identifiant</th>
                        <th scope="col">Role</th>
                        <?php 
                            if(isset($_SESSION["adminOk"])) {
                                echo '<th scope="col">Action</th>';
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($users as $user) {
                                echo "<tr>";
                                echo "<td>" . $user[0] . "</td>";
                                echo "<td>" . $user[1] . "</td>";
                                echo "<td>" . $user[2] . "</td>";
                                echo "<td>" . $user[4] . "</td>";
                                echo "<td>" . $user[3] . "</td>";
                                if(isset($_SESSION["adminOk"])) {
                                    echo '<td> <a href="index.php?action=formUpdate&id_user=' . $user[0] .'" class="btn btn-primary active m-2" role="button" aria-pressed="true">Modifier</a>';
                                    echo '<a href="index.php?action=deleteUser&id_user=' . $user[0] .'" class="btn btn-secondary active" role="button" aria-pressed="true">Supprimer</a></td>';
                                }
                            echo "</tr>";
                        } 
                    ?>
                </tbody>
            </table>
        </form>
    </div>
</div>