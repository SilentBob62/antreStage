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
    $nombreParticipant = ParticipationManager::getCount($evenement->getIdEvenement());
    ?>
  <div class="titreTournois center column">
      <div class="marge center decoTitre"><?php echo $evenement->getNomEvenement() ?></div>
      <div class="infoTournois">
          <div class="marge"><?php echo "Coût : " . $evenement->getCout() ?></div>
          <div class="marge"><?php echo "Date : " . $newDate ?></div>
          <div class="marge"><?php echo "Nombre Max Joueur : " . $evenement->getNbMaxJoueur() ?></div>
          <div class="marge"><?php echo "Nombre de joueur dans la liste : " . $nombreParticipant[0]  ?></div>
      </div>


  </div>
  <div class="contenu column center">
      <div class="participants blackTransparent margeTopTiersGrand border column">
          <div class="entete red ecritureBlanche">
              <div class="case center ">nom Participant</div>
              <div class="case center ">prenom Participant</div>
              <div class="case center ">mail Participant</div>
              <div class="case center ">telephone Participant</div>
              <div class="case center ">prevenenu par mail</div>
              <div class="case center ">presence participant</div>
              <div class="case center ">payé</div>
              <div class="case center ">supprimer</div>
          </div>
          <div class="form column">
              <?php
                foreach ($participations as $participation) {
                    echo '<div class="ligne ecritureBlanche column ">';
                    echo '<form action="index.php?action=ParticipationAction&m=modif" method = "POST">';
                    echo '<div class="infoListe"';
                    echo '<input type="text" id="IdParticipant' . $participation->getIdParticipant() . '" name="IdParticipant" value="' . $participation->getIdParticipant() . '" hidden>';
                    echo '<div class="case center "><input type="text" class="formNomParticipant input" id="nomParticipant' . $participation->getIdParticipant() . '" name="nomParticipant" value="' . $participation->getParticipant()->getNomParticipant() . '"></div>';
                    echo '<input type="text" id="IdParticipant' . $participation->getIdParticipant() . '" name="IdParticipant" value="' . $participation->getIdParticipant() . '" hidden>';
                    echo '<input type="text" id="IdParticipation' . $participation->getIdParticipant() . '" name="IdParticipation" value="' . $participation->getIdParticipation() . '" hidden>';
                    echo '<input type="text" id="IdEvenement" name="IdEvenement" hidden value = "' . $tournois . '">';
                    echo '<div class="case center "><input type="text" class="formPrenomParticipant  input" id="prenomParticipant' . $participation->getIdParticipant() . '" name="prenomParticipant" value="' . $participation->getParticipant()->getPrenomParticipant() . '"></div>';
                    echo '<div class="case center "><input type="text" class="formMailParticipant  input" id="mailParticipant' . $participation->getIdParticipant() . '" name="mailParticipant" value="' . $participation->getParticipant()->getMailParticipant() . '"></div>';
                    echo '<div class="case center "><input type="text" class="formTelParticipant  input" id="telParticipant' . $participation->getIdParticipant() . '" name="telParticipant" value="' . $participation->getParticipant()->getTelParticipant() . '"></div>';
                    echo '<input type="text" id="idPreference' . $participation->getParticipant()->getIdPreference() . '" name="idPreference" value="' . $participation->getParticipant()->getIdPreference() . '" hidden>';
                    echo '';
                    echo '<div class="case center "><input class="checkbox margeRight formPrevenu" type="checkbox" id="prevenu' . $participation->getIdParticipant() . '" name="prevenu"';
                    if ($participation->getPrevenu()) echo 'checked';
                    echo '></div>';
                    echo '<div class="case center "><input class="checkbox margeRight formPresence" type="checkbox" id="Presence' . $participation->getIdParticipant() . '" name="Presence"';
                    if ($participation->getPresence()) echo 'checked';
                    echo '></div>';
                    echo '<div class="case center "><input class="checkbox margeRight formReglement" type="checkbox" id="Reglement' . $participation->getIdParticipant() . '" name="Reglement"';
                    if ($participation->getReglement()) echo 'checked';
                    echo '></div>';
                    echo '
                </form>
                <form action="index.php?action=ParticipationAction&m=suppr&id=' . $participation->getIdParticipation() . '&idEvenement=' . $tournois . '" method="POST">
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
          <div class="center">
              <div class="boutons">
                  <form action="index.php?action=formParticipation&m=ajout" method="POST">
                      <div class="bouton marge">
                          <input type="text" id="numEvenement" name="numEvenement" hidden value="<?php echo $tournois ?>">
                          <button class="menuListe" type="submit">Ajouter</button>
                      </div>
                  </form>
                  <form action="index.php?action=ListeLot" method="post">
                      <?php
                        echo '    <input type="text" id="idEvenement" name="idEvenement" value="'.$evenement->getIdEvenement().'" hidden>';
                        ?>
                      <div class="bouton retour marge">
                          <button class="menuListe" type="submit">liste des lots</button>
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