<div class="row">
    <div class="col">
        <h1 class="display-3 text-center">Accueil</h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0 p-3">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Commande SELECT ALL</h5>
            <p class="card-text">Commande pour selectionner l'ensemble des données</p>
            <a href="index.php?action=selectAll" class="btn btn-primary">LISTE DES USERS</a>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-3 mb-sm-0 p-3">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Commande SELECT ONE</h5>
            <p class="card-text">Commande pour selectionner une seule entrée</p>
            <a href="index.php?action=selectOne" class="btn btn-primary">SELECTIONNER UN USER</a>
        </div>
        </div>
    </div>
    <?php if(isset($_SESSION["adminOk"])) { ?>
    <div class="col-sm-6 mb-3 mb-sm-0 p-3">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Commande INSERT</h5>
            <p class="card-text">Commande pour insérer une seule entrée en BDD</p>
            <a href="index.php?action=insert" class="btn btn-primary">CREER UN USER</a>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-3 mb-sm-0 p-3">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Commande UPDATE - DELETE</h5>
            <p class="card-text">Commmande pour mettre à jour ou supprimer une entrée</p>
            <a href="index.php?action=updateDeleteOne" class="btn btn-primary">METTRE A JOUR UN USER</a>
            <a href="index.php?action=updateDeleteOne" class="btn btn-primary">SUPPRIMER UN USER</a>
        </div>
        </div>
    </div>
    <?php } ?>
</div>
