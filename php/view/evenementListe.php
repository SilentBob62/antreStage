    <?php
    if($lvl < 1){
        header("Location: index.php");
    }
    $evenements=EvenementManager::getListByDate();

    ?>
    <div class="contenu column center">
        <div class= "tournois blackTransparent margeTopGrand border column" >
            <div class="entete red ecritureBlanche">
                <div class="caseFlex center margeDemiTop">nom evenements</div>
                <div class="caseFlex center margeDemiTop">nombre max de participants</div>
                <div class="caseFlex center margeDemiTop">coût inscription</div>
                <div class="caseFlex center margeDemiTop">Jeu</div>
                <div class="caseFlex center margeDemiTop">date</div>
                <div class="caseFlexSuppr center margeDemiTop">supprimer</div>
            </div>
            <div class="form column"> 
            <?php 
            //pas fini
            foreach ($evenements as $evenement) {
                echo '<div class="ligne ecritureBlanche column ">';
                echo '<form action="index.php?action=EvenementAction&m=modif" method = "POST">';
                echo '<div class="infoListe">';
                echo '<input type="text" id="IdEvenement' . $evenement->getIdEvenement() . '" name="IdEvenement" value="' . $evenement->getIdEvenement() . '" hidden>';
                echo '<div class="caseFlex center margeDemiTop"><input type="text" class="formNomEvenement input" id="nomEvenement' . $evenement->getNomEvenement() . '" name="nomEvenement" value="' . $evenement->getNomEvenement() . '"></div>';
                echo '<div class="caseFlex center margeDemiTop"><input type="text" class="formnbMaxJoueur input" id="nbMaxJoueur' . $evenement->getNbMaxJoueur() . '" name="nbMaxJoueur" value="' . $evenement->getNbMaxJoueur() . '" pattern="[0-9]{0,2}"></div>';
                echo '<div class="caseFlex center margeDemiTop"><input type="text" class="formCoutEvenement input" id="cout' . $evenement->getCout() . '" name="cout" value="' .$evenement->getCout() . '"></div>';
                 echo '<input type="text" id="idJeu' . $evenement->getIdJeu() . '" name="idJeu" value="' . $evenement->getIdjeu() . '"hidden>';
                 if($evenement->getIdJeu())
                echo '<div class="caseFlex center margeDemiTop"><input type="text" class="formNomJeu input" id="nomJeu' . $evenement->getJeu()->getNomJeu() . '" name="nomJeu" value="' . $evenement->getJeu()->getNomJeu() . '" ></div>';
                else
                echo '<div class="caseFlex center margeDemiTop"><input type="text" class="formNomJeu input" id="" name="nomJeu" value="" ></div>';
                echo '<div class="caseFlex center margeDemiTop"><input type="date" class="formDateEvenement input" id="date' . $evenement->getDateEvenement() . '" name="dateEvenement" value="' . $evenement->getDateEvenement() . '"></div>';
                echo '</form>
            <form class="caseFlexSuppr action="index.php?action=EvenementAction&m=suppr&id=' . $evenement->getIdEvenement() . '" method="POST">
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
        <form action="index.php?action=EvenementAction&m=ajout" method="POST">
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