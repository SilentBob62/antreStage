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
                    <!-- permet de creer modifier et supprimer un evenement -->
                    <button class="menuListeGeneral">Créer un Evenement</button>  
                </div>
            </form>
            <form action="index.php?action=choixTournois" method="post">
                <div class="bouton center marge">
                    <!-- permet d'ajouter modifier et supprimer les participants et les lots via differentes manieres -->
                    <button class="menuListeGeneral">Gérer les événements</button>
                </div>
            </form>
            <form action="index.php?action=menuTournois" method="post">
                <div class="bouton center marge">
                    <!-- lance le déroulement du tournois -->
                    <button class="menuListeGeneral">Demarer Tournois</button>
                </div>
            </form>
            <form action="index.php?action=listeGagnant" method="post">
                <div class="bouton center marge">
                    <!-- Affiche la liste des gagnants -->
                    <button class="menuListeGeneral">Liste des Gagnants</button>
                </div>
            </form>
        </div>
    </div>
</div>