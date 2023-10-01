<div class="row">
    <div class="col m-5">
        <h2 class="display-5 text-center">Choisir un utilisateur</h2>
    </div>
</div>
            
<form action="" method="POST">
    <div class="form-group row">
        <label for="search-select" class="col-sm-6 col-form-label">Veuillez preciser par quel champs souhaitez-vous faire la recherche</label>
        <div class="col-sm-4">
            <select class="form-control" name="menu-select-one" id="search-select">
                <option value="">Veuillez choisir le champs</option>
                <option value="id">Par id</option>
                <option value="firstname">Par prenom</option>
                <option value="lastname">Par nom</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">Valeur à rechercher</label>
        <div class="col-sm-4">
            <input name="value-select-one" type="text" class="form-control"/>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Valider</button>
</form>