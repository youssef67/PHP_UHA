<header class="site-header">
    <div class="site-identity">
        <h1><a style="color:white" href="index.php?nomPage=accueil">Mon site</a></h1>
    </div>
    <nav class="site-navigation">
        <ul class="nav">
            <li><a style="color:white" href="index.php?nomPage=accueil">accueil</a></li>
            <li><a style="color:white" href="index.php?nomPage=contrat">contrat</a></li>
            <li><a style="color:white" href="index.php?nomPage=produit">produit</a></li>
            <li><a style="color:white" href="index.php?nomPage=societe">societe</a></li>
            <li><a style="color:white" href="../jeuCombat/indexCombat.php">jeux</a></li>
            <?php
                if(isset($_SESSION["adminOk"])) {
                    echo '<li><a style="color:white" href="index.php?nomPage=adminDisconnect">déconnexion au Panel Admin</a></li>';
                } else {
                    echo '<li><a style="color:white" href="index.php?action=adminConnect">Connexion au Panel Admin</a></li>';
                }
            ?>
        </ul>
    </nav>    
</header>