   <?php
    if ($lvl < 1) {
        header("Location: index.php");
    }
    $mode = $_GET["m"];
    $id = $_GET["id"];
    $participant=ParticipantManager::getById($id);
    $listePreference=PreferenceManager::getList();
// echo $id;
// var_dump($participation);
if($participant->getIdPreference()!==null)                          // si il existe une préférence
$preference=$participant->getpreference()->getNomPreference();      // je recupere le nom de la preference
else 
$preference="";                                                     // sinon la preference est egal a rien
    echo'
    <div class="contenu column center">
        <div class="connexion blackTransparent margeTopGrand border column">
            <form action="index.php?action=ParticipantAction&m=' . $mode . '&origine=form" method = "POST">
                <div class="column">
                        <input type="text" id="IdParticipant" name="IdParticipant" value="'.$participant->getIdParticipant().'" hidden>
                    <div class="margeLeft margeTop">
                        <label for="nomParticipant">nom du Participant</label>
                        <input class="margeRight" type="text" id="nomParticipant" name="nomParticipant" value ="' . $participant->getNomParticipant() . '">
                    </div>
                    <div class="margeLeft margeTop">
                        <label for="prenomParticipant">prenom du Participant</label>
                        <input class="margeRight" type="text" id="prenomParticipant" name="prenomParticipant" value ="' . $participant->getPrenomParticipant() . '">
                    </div>
                    <div class="margeLeft margeTop">
                        <label for="mailParticipant">mail du Participant</label>
                        <input class="margeRight" type="text" id="mailParticipant" name="mailParticipant" value ="' . $participant->getMailParticipant() . '">
                    </div>
                    <div class="margeLeft margeTop">
                        <label for="telParticipant">telephone du Participant</label>
                        <input class="margeRight" type="text" id="telParticipant" name="telParticipant" value ="' . $participant->getTelParticipant() . '">
                        </div>
                        <div class="margeLeft margeTop">
                        <label for="telParticipant">Préférence du Participant</label>
                        <select class="margeRight" name="idPreference" id="idPreference">';
                        if($participant->getIdPreference()!==null)  // si il existe une préférence
                        echo'<option value="'.$participant->getIdPreference().'">'.$participant->getPreference()->getNomPreference().'</option>';
                        else
                        echo'<option value=""></option>';
                        foreach($listePreference as $preference)    // on fait une liste déroulante pour chaque preference qui existe
                        {
                            echo' <option value="'.$preference->getIdPreference().'">'.$preference->getNomPreference().'</option>';
                        }
                        echo'
                        </select>
                    </div>
                    <div class="boutons center">
                        <div class="bouton marge center">
                            <button class="menuListe" type="submit">Modifier</button>
                        </div>
                </form>
                <form action="index.php?action=ListeHabitue" method="POST">
                    <div class="bouton retour marge center">
                        <button class="menuListe" type="submit">Retour</button>
                    </div>
                </div>
            </form>
        </div>
    </div>';
   ?>
