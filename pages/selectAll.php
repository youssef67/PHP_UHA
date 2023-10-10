<?php
    $userBdd = new User();
    $users = $userBdd->selectAll();
?>
<div class="row">
    <div class="col m-5">
        <h2 class="display-5 text-center">Liste des users</h2>
    </div>
</div>
<?php   if(isset($_SESSION["adminOk"])) { ?>
<div class="row">
    <div class="col">
        <a href="index.php?action=insert" class="btn btn-primary active m-2" role="button" aria-pressed="true">Ajouter un utilisateur</a>
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
                                    echo '<td> <a href="index.php?action=updateUser&id_user=' . $user[0] .'" class="btn btn-primary active m-2" role="button" aria-pressed="true">Modifier</a>';
                                    echo '<a href="index.php?action=delete&id_user=' . $user[0] .'" class="btn btn-secondary active" role="button" aria-pressed="true">Supprimer</a></td>';
                                }
                            echo "</tr>";
                        } 
                    ?>
                </tbody>
            </table>
        </form>
    </div>
</div>