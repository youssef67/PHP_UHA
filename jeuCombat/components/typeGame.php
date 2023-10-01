
<div class="row">
    <h2 class="col-12 text-center mt-5">Bienvenue dans le jeu de combat</h2>
</div>
<p class="mt-5">Le but du jeu est de faire du combat, pleins de combats !!</p>
<p>Les combats seront des 1VS 1, plusieurs mode de jeux s'offre à vous : </p>

<li>Solo - Un seul combat, le dernier vivant gagne la partie</li>
<li>Trio - Deux équipes s'affronte, la dernière équipe vivante remporte la partie</li>
<li>Libre - Vous choissisez le nombre de combattant, les armes, les pouvoirs, etc</li>


<div class="mt-5" id="form-typeGame">
    <p>A vous de choisir !!!</p>

    <form action="" method="get">
        <div class="form-group row">
            <div class="col-12 form-check ">
                <input class="form-check-input" type="radio" value="solo" name="typeGame" id="solo">
                <label class="form-check-label" for="typeGame">
                Solo
                </label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12 form-check">
                <input class="form-check-input" type="radio" value="trio" name="typeGame" id="trio">
                <label class="form-check-label" for="typeGame">
                Trio
                </label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12 form-check">
                <input class="form-check-input" type="radio" value="libre" name="typeGame" id="libre">
                <label class="form-check-label" for="typeGame">
                Libre
                </label>
            </div>
        </div>
        <div class="text-center">
            <button type="submit"  class="btn btn-primary" id="btn-typeGame">Valider</button>
        </div>
    </form>
</div>