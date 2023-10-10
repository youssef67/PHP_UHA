<?php 
    $userBdd = new User();
    $user = $userBdd->selectOne("user_id", $_GET["id_user"]);
?>

<h2 style="margin: 30px;">Entrée à modifier</h2>
<div class="row">
    <div class="col-9" class="text-center">
        <form action="" method="post" name="validation-update" >
            <input type="text" name="id" value="<?= $user[0] ?>" hidden>
            <div class="form-group row text-right">
                <label for="search-select" class="col-sm-6 col-form-label ">nom :</label>
                <div class="col-sm-4">
                    <input name="nom-valide" id="nom" type="text" class="form-control" value="<?= $user[2] ?>"/>
                </div>
            </div>
            <div class="form-group row text-right">
                <label class="col-sm-6 col-form-label">prenom :</label>
                <div class="col-sm-4">
                    <input name="prenom" id="age" type="text" class="form-control" value="<?= $user[1] ?>"/>
                </div>
            </div>
            <div class="form-group row text-right">
                <label class="col-sm-6 col-form-label">identifiant :</label>
                <div class="col-sm-4">
                    <input name="identifiant" id="age" type="text" class="form-control" value="<?= $user[4] ?>"/>
                </div>
            </div>  
            <div class="form-group row text-right">
                <label for="insert-select" class="col-sm-6 col-form-label">Role</label>
                <div class="col-sm-4">
                    <select class="form-control" name="role" id="insert-select" value="<?= $user[3] ?>">
                        <option value="">--Merci de choisir un rôle--</option> 
                        <option value="user" <?php if ($user[3] == "user") { echo "selected"; } ?>>user</option>
                        <option value="admin" <?php if ($user[3] == "admin") { echo "selected"; } ?>>admin</option>
                    </select>
                </div>
            </div>
            <div class="text-center">
                <button type="submit"  class="btn btn-primary">Valider</button>
            </div>
        </form>
    </div>
</div>