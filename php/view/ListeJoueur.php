<?php
if ($lvl < 1) {
    header("Location: index.php");
}
$participants = ParticipantManager::getListOrderByPreference();
$evenements = EvenementManager::getList();
$preferences=PreferenceManager::getList();
?>
<div class="contenu column center">
    <div class="participants blackTransparent margeTopDemiGrand border column">
        <div class="entete red ecritureBlanche">
            <div class="caseFlex center caseHeight">Nom</div>
            <div class="caseFlex center caseHeight">Prenom</div>
            <div class="caseFlex center caseHeight">Mail</div>
            <div class="caseFlex center caseHeight">Telephone</div>
            <div class="caseFlexSuppr center caseHeight">Préférence</div>
            <div class="caseFlexSuppr center caseHeight">Supprimer</div>
        </div>
        <div class="form column">
            <?php
            foreach ($participants as $participant) {
                echo '
                    <div class="ligne ecritureBlanche column">
                        <form action="index.php?action=ParticipantAction&m=modif" method="POST">
                            <div class="infoListe">';
                echo '          <input class="habitue' . $participant->getIdParticipant() . '" type="text" id="idParticipant' . $participant->getIdParticipant() . '" name="idParticipant" value="' . $participant->getIdParticipant() . '" hidden>';
                echo '          <div class="caseFlex center caseHeight"><input type="text" class="formNomDuParticipant input" id="nomParticipant' . $participant->getNomParticipant() . '" name="nomParticipant" value="' . $participant->getNomParticipant() . '"></div>
                                <div class="caseFlex center caseHeight"><input type="text" class="formPrenomDuParticipant input" id="prenomParticipant' . $participant->getPrenomParticipant() . '" name="prenomParticipant" value="' . $participant->getPrenomParticipant() . '"></div>
                                <div class="caseFlex center caseHeight"><input type="text" class="formMailDuParticipant input" id="mailParticipant' . $participant->getMailParticipant() . '" name="mailParticipant" value="' . $participant->getMailParticipant() . '"></div>
                                <div class="caseFlex center caseHeight"><input type="text" class="formTelDuParticipant input" id="telParticipant' . $participant->getTelParticipant() . '" name="telParticipant" value="' . $participant->getTelParticipant() . '"></div>
                                <div class="caseFlexSuppr center caseHeight">
                                    <select name="idPreference" id="idPreference" class="formPreferenceDuParticipant input" >';
                                    if($participant->getIdPreference()!==null)
                                        echo'<option value="'.$participant->getIdPreference().'">'.$participant->getPreference()->getNomPreference().'</option>';
                                    else
                                        echo'<option value=""></option>';
                                    foreach($preferences as $preference)
                                    echo'<option value="'.$preference->getIdPreference().'">'.$preference->getNomPreference().'</option>';
                                    // {
                                    //     echo'<option value="'.$prefernce->getIdPreference().'">'.$preference->getNomPreference().'</option>';
                                    // }
                                    echo'
                                    </select>
                                </div>
                                <div class="caseFlexSuppr center caseHeight">
                                    <a class="boutonModif" href="index.php?action=ParticipantAction&m=suppr&id=' .  $participant->getIdParticipant() . '"><div class="bouton modif center">supprimer</div></a>  
                                </div>
                            </div>    
                        </form>
                    </div>
                ';
            }
            ?>
        </div>
        <div class="boutons center">
            <form action="index.php?action=ParticipantAction&m=ajout" method="POST">
                <div class="bouton retour marge center">
                    <button class="menuListe" type="submit">Ajouter</button>
                </div> 
            </form>
            <form action="index.php?action=choixTournois" method="POST">
                <div class="bouton retour marge center">
                    <button class="menuListe" type="submit">Retour</button>
                </div> 
            </form>
        </div>  
    </div>
</div>
