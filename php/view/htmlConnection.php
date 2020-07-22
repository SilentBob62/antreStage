<?php
?>
<div class="contenu column center">
    <div class="connexionExterieur  blackTransparent margeTopGrand border column center">
        <form class="connexion blackTransparent margeCo border" action="index.php?action=connect" method="post">

            <div class="ecritureBlanche center margeTop">
                <h2>Connexion</h2>
            </div>
            <div class="contenuForm column">
                <div class="ligneForm margeTop">
                    <div class="espaceInput"></div>
                    <input class="co" type="text" name="pseudo" id="pseudo" maxlength="50" placeholder="Entrez votre Pseudo" required autofocus>
                    <div class="espaceInput"></div>
                </div>

                <div class="ligneForm margeTop">
                    <div class="espaceInput"></div>
                    <input class="co" type="password" name="motDePasse" id="motDePasse" maxlength="30" placeholder="Entrez votre mot de passe" required>
                    <div class="espaceInput"></div>
                    <!-- <div id="oeil"><i class="fa fa-eye" aria-hidden="true"></i></div> -->
                </div>


                <div class="center margeTop margeBottom">
                    <button class="valider" type="submit" value="Valider">connect</button>
                    <!-- <a class="lien-a" href="index.php?action=nouveauUser">Pas encore inscrit ?</a> -->
                </div>
            </div>

        </form>
    </div>
</div>