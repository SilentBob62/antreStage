<?php
$evenements=EvenementManager::getList();
?>

<div class="contenu column center">
    <div class="connexion blackTransparent margeTopGrand border column">
        <form action="index.php?action=gagnantAction&m=ajout" method="post">
            <div class="margeLeft margeTop">
                <label for="nomGagnant">Nom du gagnant</label>
                <input class="margeRight input" type="text" id="nomGagnant" name="nomGagnant" value="" required>
            </div>
            <div class="margeLeft margeTop">
                <label for="prenomGagnant">Prenom du gagnant</label>
                <input class="margeRight input" type="text" id="prenomGagnant" name="prenomGagnant" value="" required>
            </div>
            <div class="margeLeft margeTop">
                <select class="margeRight input" name="idEvenenment" id="idEvenenment" required>
                    <option value="">Selectionnez le Tournois</option>
                <?php foreach($evenements as $evenement)      // on fait une liste déroulante pour chaque Evenement
                {
                    echo'<option value="'.$evenement->getIdEvenement().'">'.$evenement->getNomEvenement().'</option>';
                }
                ?>
                </select>
            </div>    
            <div class="bouton retourB marge center">
                <button class="menuListe marge" type="submit">Ajouter</button>
        </form>
        <form action="index.php?action=listeGagnant" method="POST">
                <button class="menuListe marge" type="submit">retour</button>
        </form>
            </div>
    </div>
</div>