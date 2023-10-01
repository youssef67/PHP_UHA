
<h2 style='margin: 30px;'>Liste des utilisateurs</h2>

<?php  

$user = $database->selectAll();

if (isset($editOk) && $editOk) {
    echo "<h3 style='color:green;'>Modification effectuée</h3>";
} elseif(isset($entryDelete) && $entryDelete)
    echo "<h3 style='color:green;'>Suppresion effectuée</h3>";

?>

<form action="" method="POST">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">firstname</th>
                <th scope="col">lastname</th>
                <th scope="col">Identifiant</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($user as $field) { 
            ?>
                <tr>
                    <th scope="row"><?= $field[0]; ?></th>
                    <td><?= $field[1]; ?></td>
                    <td><?= $field[2]; ?></td>
                    <td><?= $field[4]; ?></td>
                    <td><?= $field[3]; ?></td>
                    <td>
                        <button type="submit" name="editUser" class="btn btn-warning" value="<?= $field[0] ?>">Editer</button>
                        <button type="submit" name="deleteUser" class="btn btn-danger" value="<?= $field[0] ?>">supprimer</button>
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</form>