    <?php
    if($lvl < 1){
        header("Location: index.php");
    }
    $evenements=EvenementManager::getListByDate();

    ?>
    <div class="contenu column center">
        <div class= "tournois blackTransparent margeTopGrand border column" >
            <div class="entete red ecritureBlanche">
                <div class="case center margeDemiTop">nom evenements</div>
                <div class="case center margeDemiTop">nombre max de participants</div>
                <div class="case center margeDemiTop">coût inscription</div>
                <div class="case center margeDemiTop">Jeu</div>
                <div class="case center margeDemiTop">date</div>
                <div class="case center margeDemiTop">modifier</div>
                <div class="case center margeDemiTop">supprimer</div>
            </div>
            <div class="form column"> 
            <?php 
            //pas fini
            foreach ($evenements as $evenement) {
                echo '<div class="ligne ecritureBlanche column ">';
                echo '<form action="index.php?action=EvenementAction&m=modif" method = "POST">';
                echo '<div class="infoListe">';
                echo '<input type="text" id="IdEvenement' . $evenement->getIdEvenement() . '" name="IdEvenement" value="' . $evenement->getIdEvenement() . '" hidden>';
                echo '<div class="case center margeDemiTop"><input type="text" id="nomEvenement' . $evenement->getNomEvenement() . '" name="nomEvenement" value="' . $evenement->getNomEvenement() . '"></div>';
                echo '<div class="case center margeDemiTop"><input type="text" id="nbMaxJoueur' . $evenement->getNbMaxJoueur() . '" name="nbMaxJoueur" value="' . $evenement->getNbMaxJoueur() . '"></div>';
                echo '<div class="case center margeDemiTop"><input type="text" id="cout' . $evenement->getCout() . '" name="cout" value="' .$evenement->getCout() . '"></div>';
                 echo '<input type="text" id="idJeu' . $evenement->getIdJeu() . '" name="idJeu" value="' . $evenement->getIdjeu() . '"hidden>';
                echo '<div class="case center margeDemiTop"><input type="text" id="nomJeu' . $evenement->getJeu()->getNomJeu() . '" name="nomJeu" value="' . $evenement->getJeu()->getNomJeu() . '"></div>';
                echo '<div class="case center margeDemiTop"><input type="date" id="date' . $evenement->getDateEvenement() . '" name="dateEvenement" value="' . $evenement->getDateEvenement() . '"></div>';
                echo '<div class="case center ">
            <div class="bouton marge center">
                <button class="menuDansListe" type="submit">Enregistrer</button>
            </div>
            </div>
            </form>
            <form action="index.php?action=EvenementAction&m=suppr&id=' . $evenement->getIdEvenement() . '" method="POST">
                <div class="bouton marge center">
                    <button class="menuDansListe" type="submit">supprimer</button>
                </div>
            </form>
        </div>
        </div>
            ';
            }
           ?>
           </div>
        <div class="boutons center">
        <form action="index.php?action=formEvenement&m=ajout" method="POST">
            <div class="bouton retour marge center">
                <button class="menuListe" type="submit">Ajouter</button>
            </div>
        </form>
        <form action="index.php?action=menu" method="POST">
            <div class="bouton retour marge">
                <button class="menuListe" type="submit">Retour</button>
            </div>
        </form>
        </div>

    </div>