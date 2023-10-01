<h2 style="margin: 30px;">Se connecter en Admin</h2>
            
<div class="row">
    <div class="col-12" class="text-center">
        <?php
            if (!empty($_GET["error"])) 
                echo '<p style="color: red; font-weight:bold;">Identifiant ou mot de passe erronés, merci de recommencer</p>';      
        ?>
        <form action="../index.php" method="post" >
            <div class="form-group row">
                <label class="col-sm-4 col-form-label text-right">identifiant :</label>
                <div class="col-sm-4">
                    <input name="identifiant" id="age" type="text" class="form-control"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label text-right">password :</label>
                <div class="col-sm-4">
                    <input name="password" id="age" type="password" class="form-control"/>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button type="submit"  class="btn btn-primary">Valider</button>
                </div>
            </div>
        </form>
    </div>
</div>