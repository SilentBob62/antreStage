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
                    <input class="margeRight  input" type="text" id="nomEvenement" name="nomEvenement" placeholder="Nom de l evenement" pattern="[a-zA-Z0-9]){3,20}" required autofocus> 
                    <span class="message"></span>
                </div> 
                <div class="margeLeft margeTop">
                    <label for="maxParticipant">nombre de joueur maximum</label>
                    <input class="margeRight input" type="text" id="nbMaxJoueur" name="nbMaxJoueur" placeholder="nombre de Joueur maximum" pattern="[0-9]{0,2}" autofocus>
                    <span class="message"></span>
                </div>
                <div class="margeLeft margeTop">
                    <label for="cout">Coût Tournois</label>
                    <input class="margeRight" type="text" id="cout" name="cout" placeholder="cout de l evenement" pattern="[a-zA-Z0-9€]){2,7}" autofocus>
                    <span class="message"></span>
                </div>
                <div class="margeLeft margeTop">
                    <label for="nomJeu">nom Jeu</label>
                    <input class="margeRight  input" type="text" id="nomJeu" name="nomJeu" placeholder="nom du jeu" pattern="[a-zA-Z0-9]){1,20}" required autofocus>
                    <span class="message"></span>
                </div>
                <div class="margeLeft margeTop">
                    <label for="dateEvenement">date Evenement</label>
                    <input class="margeRight  input" type="date" required  id="dateEvenement" name="dateEvenement">
                    <span class="message"></span>
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
