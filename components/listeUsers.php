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
                    <?php 
                        if ($_GET["action"] == "selectOne") {
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
                            if ($_GET["action"] == "selectOne") {
                                echo '<td> <a href="#" class="btn btn-primary active m-2" role="button" aria-pressed="true">Modifier</a>';
                                echo '<a href="#" class="btn btn-secondary active" role="button" aria-pressed="true">Supprimer</a>';
                            }
                        echo "</tr>";
                    } 
                ?>
            </tbody>
        </table>
    </div>
</div>