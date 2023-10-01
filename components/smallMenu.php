<div class="row">
    <div class="col">
        <p class="col-6 text-center mt-5 font-weight-bold" style="font-size: 26px;">Autres actions disponibles</p>
    </div>
</div>
<div class="row hidden">
    <div class="col">
        <?php
            if ($_GET["action"] == "selectAll") {
                if (isset($_SESSION["adminOk"]) && $_SESSION["adminOk"]) {
                    echo '<a href="index.php?action=selectOne" class="col-3 btn btn-primary mr-1" role="button" >Afficher un user</a>';
                    echo '<a href="index.php?action=insert" class="col-3 btn btn-primary mr-1" role="button" >Ajouter un user</a>';
                    echo '<a href="index.php?action=updateDeleteOne" class="col-3 btn btn-primary mr-1"  " role="button" >Modifier/supprimer un user</a>';
                } else {
                    echo '<a href="index.php?action=selectOne" class="col-3 btn btn-primary mr-1" role="button" >Afficher un user</a>';
                }
            }
            else if ($_GET["action"] == "selectOne") {
                if (isset($_SESSION["adminOk"]) && $_SESSION["adminOk"]) {
                    echo '<a href="index.php?action=selectAll" class="col-2 btn btn-primary mr-2" role="button" >Afficher la liste des users</a>';
                    echo '<a href="index.php?action=insert" class="col-3 btn btn-primary mr-1" role="button" >Ajouter un user</a>';
                    echo '<a href="index.php?action=updateDeleteOne" class="col-3 btn btn-primary mr-1"  " role="button" >Modifier/supprimer un user</a>';
                } else {
                    echo '<a href="index.php?action=selectAll" class="col-3 btn btn-primary mr-1" role="button" >Afficher la liste des users</a>';
                }
            }
            else if ($_GET["action"] == "insert" && isset($_SESSION["adminOk"]) && $_SESSION["adminOk"]) {
                    echo '<a href="index.php?action=selectAll" class="col-2 btn btn-primary mr-2" role="button" >Afficher la liste des users</a>';
                    echo '<a href="index.php?action=selectOne" class="col-2 btn btn-primary mr-2 "  role="button" >Afficher un user</a>';
                    echo '<a href="index.php?action=updateDeleteOne" class="col-2 btn btn-primary mr-2" role="button" >Modifier/supprimer un user</a>';
            } 
            else {
                echo '<a href="index.php?action=selectAll" class="col-2 btn btn-primary mr-2"  role="button" >Afficher la liste des users</a>';
                echo '<a href="index.php?action=selectOne" class="col-2 btn btn-primary mr-2" role="button" >Afficher un user</a>';
                echo '<a href="index.php?action=insert" class="col-2 btn btn-primary mr-2" role="button" >Ajouter un user</a>';
            }
        ?>
    </div>
</div>

