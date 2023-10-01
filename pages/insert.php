<h2 style="margin: 30px;">Création d'un utilisateur</h2>          
<div class="row">
    <div class="col-9" class="text-center">
        <form action="" method="post" >
            <div class="form-group row text-right">
                <label for="search-select" class="col-sm-6 col-form-label ">nom :</label>
                <div class="col-sm-4">
                    <input name="nom" id="nom" type="text" class="form-control"/>
                </div>
            </div>
            <div class="form-group row text-right">
                <label class="col-sm-6 col-form-label">prenom :</label>
                <div class="col-sm-4">
                    <input name="prenom" id="age" type="text" class="form-control"/>
                </div>
            </div>
            <div class="form-group row text-right">
                <label class="col-sm-6 col-form-label">identifiant :</label>
                <div class="col-sm-4">
                    <input name="identifiant" id="age" type="text" class="form-control"/>
                </div>
            </div>
            <div class="form-group row text-right">
                <label class="col-sm-6 col-form-label">password :</label>
                <div class="col-sm-4">
                    <input name="password" id="age" type="password" class="form-control"/>
                </div>
            </div>
            <div class="form-group row text-right">
                <label for="insert-select" class="col-sm-6 col-form-label">Role</label>
                <div class="col-sm-4">
                    <select class="form-control" name="role" id="insert-select">
                        <option value="">--Merci de choisir un rôle--</option> 
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                </div>
            </div>
            <div class="text-center">
                <button type="submit"  class="btn btn-primary">Valider</button>
            </div>
        </form>
    </div>
</div>