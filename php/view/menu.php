<?php
if ($lvl < 1) {
    header("Location: index.php");
}
?>
<div class="contenu column center">
    <div class="connexionExterieur  blackTransparent margeTopGrand border column center">
        <div class="connexion margeCo blackTransparent border column">
            <form action="index.php?action=evenementListe" method="post">
                <div class="bouton center marge">
                    <button class="menuListeGeneral">Créer un Evenement</button>
                </div>
            </form>
            <form action="index.php?action=choixTournois" method="post">
                <div class="bouton center marge">
                    <button class="menuListeGeneral">Gérer les événements</button>
                </div>
            </form>
            <form action="index.php?action=menuTournois" method="post">
                <div class="bouton center marge">
                    <button class="menuListeGeneral">Demarer Tournois</button>
                </div>
            </form>
            <form action="index.php?action=listeGagnant" method="post">
                <div class="bouton center marge">
                    <button class="menuListeGeneral">Liste des Gagnants</button>
                </div>
            </form>
        </div>
    </div>
</div>