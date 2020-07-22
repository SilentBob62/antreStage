<?php
if ($lvl < 1) {
    header("Location: index.php");
}

echo '
    <div class="contenu column center">
        <div class= "formulaire blackTransparent margeTopGrand border column" >
            <form action="index.php?action=EvenementAction&m=ajout" method = "POST">
            <div class="column">
                <div class="margeLeft margeTop">
                    <label for="nomEvenement">nom Evenement</label>
                    <input class="margeRight" type="text" id="nomEvenement" name="nomEvenement" placeholder="Nom de l evenement"  required autofocus> 
                </div> 
                <div class="margeLeft margeTop">
                    <label for="maxParticipant">nombre de joueur maximum</label>
                    <input class="margeRight" type="text" id="nbMaxJoueur" name="nbMaxJoueur" placeholder="nombre de Joueur maximum" autofocus>
                </div>
                <div class="margeLeft margeTop">
                    <label for="cout">Coût Tournois</label>
                    <input class="margeRight" type="text" id="cout" name="cout" placeholder="cout de l evenement"  autofocus>
                </div>
                <div class="margeLeft margeTop">
                    <label for="nomJeu">nom Jeu</label>
                    <input class="margeRight" type="text" id="nomJeu" name="nomJeu" placeholder="nom du jeu" required autofocus>
                </div>
                <div class="margeLeft margeTop">
                    <label for="dateEvenement">date Evenement</label>
                    <input class="margeRight" type="date" required  id="dateEvenement" name="dateEvenement">
                </div>
                <div class="bouton retour marge center">
                    <button class="menuListe" type="submit">Ajouter</button>
                </div>
            </form>
            <form action="index.php?action=evenementListe" method="POST">
                <div class="bouton retour marge center">
                    <button class="menuListe" type="submit">Retour</button>
                </div>
            </form>
        </div>
    </div>';
