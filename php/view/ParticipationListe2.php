  <?php
    if ($lvl < 1) {
        header("Location: index.php");
    }
    if (!empty($_POST["tournois"])) {
        $tournois = $_POST["tournois"];
        // var_dump($tournois);
    } else {
        $tournois = $_GET['idEvenement'];
        // echo $_GET['idEvenement'];
    }
    $participations = ParticipationManager::getListByIdEvenementOrderByNom($tournois);
    $evenement = EvenementManager::getById($tournois);
    $originalDate = $evenement->getDateEvenement();
    $newDate = date("d-m-Y", strtotime($originalDate));
    ?>
  <div class="titreTournois center column">
      <div class="marge center decoTitre"><?php echo $evenement->getNomEvenement() ?></div>
      <div class="infoTournois">
          <div class="marge"><?php echo "Coût : " . $evenement->getCout() ?></div>
          <div class="marge"><?php echo "Date : " . $newDate ?></div>
          <div class="marge"><?php echo "Nombre Max Joueur : " . $evenement->getNbMaxJoueur() ?></div>
      </div>


  </div>
  <div class="contenu column center">
      <div class="participants blackTransparent margeTopTiersGrand border column">
          <div class="entete red ecritureBlanche">
              <div class="case center margeDemiTop">nom Participant</div>
              <div class="case center margeDemiTop">prenom Participant</div>
              <div class="case center margeDemiTop">mail Participant</div>
              <div class="case center margeDemiTop">telephone Participant</div>
              <div class="case center margeDemiTop">prevenenu par mail</div>
              <div class="case center margeDemiTop">presence participant</div>
              <div class="case center margeDemiTop">payé</div>
              <div class="case center margeDemiTop">modifier</div>
              <div class="case center margeDemiTop">supprimer</div>

          </div>
          <?php
            foreach ($participations as $participation) {
                echo '<div class="ligne ecritureBlanche">';
                echo '<input type="text" id="IdParticipant' . $participation->getIdParticipant() . '" name="IdParticipant" value="' . $participation->getIdParticipant() . '" hidden>';
                echo '<div class="case center margeDemiTop">' . $participation->getParticipant()->getNomParticipant() . '</div>';
                echo '<div class="case center margeDemiTop">' . $participation->getParticipant()->getPrenomParticipant() . '</div>';
                echo '<div class="case center margeDemiTop">' . $participation->getParticipant()->getMailParticipant() . '</div>';
                echo '<div class="case center margeDemiTop">' . $participation->getParticipant()->getTelParticipant() . '</div>';
                echo '';
                echo '<div class="case center margeDemiTop"><input class="checkbox margeRight" type="checkbox" id="prevenu' . $participation->getIdParticipant() . '" name="prevenu"';
                if ($participation->getPrevenu()) echo 'checked';
                echo '></div>';
                echo '<div class="case center margeDemiTop"><input class="checkbox margeRight" type="checkbox" id="Presence' . $participation->getIdParticipant() . '" name="Presence"';
                if ($participation->getPresence()) echo 'checked';
                echo '></div>';
                echo '<div class="case center margeDemiTop"><input class="checkbox margeRight" type="checkbox" id="Reglement' . $participation->getIdParticipant() . '" name="Reglement"';
                if ($participation->getReglement()) echo 'checked';
                echo '></div>';
                echo '<div class="case center margeDemiTop">
                <div class="bouton modif center">
                    <a class="boutonModif" href="index.php?action=formParticipation&m=modif&idTournois=' . $tournois . '&id=' . $participation->getIdParticipation() . '"><span>Modifier</span></a>
                </div> 
                </div>
                <div class="case center margeDemiTop">
                    <div class="bouton modif center">
                    <a class="boutonModif" href="index.php?action=ParticipationAction&m=suppr&id=' . $participation->getIdParticipation() . '&idEvenement=' . $tournois . '"><span>Supprimer</span></a>
                    </div> 
                </div>
            </div>
                ';
            }
            ?>
          <div class="center">
              <div class="boutons">
                  <form action="index.php?action=formParticipation&m=ajout" method="POST">
                      <div class="bouton marge">
                          <input type="text" id="numEvenement" name="numEvenement" hidden value="<?php echo $tournois ?>">
                          <button class="menuListe" type="submit">Ajouter</button>
                      </div>
                  </form>
                  <form action="index.php?action=choixTournois" method="post">
                      <div class="bouton retour marge">
                          <button class="menuListe" type="submit">Retour</button>
                      </div>
                  </form>
              </div>
          </div>


      </div>