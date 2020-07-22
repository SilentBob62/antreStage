<?php
if ($lvl < 1) {
    header("Location: index.php");
}
$participations=ParticipationManager::getList();
foreach($participations as $participation)
{
    echo'<input type="text" name="info" class="'.$participation->getIdEvenement().'" value="'.$participation->getIdParticipant().'" hidden>';
}
$participants = ParticipantManager::getListOrderByPreference();
$evenements = EvenementManager::getList();
?>
<div class="contenu column center">
    <div class="participants blackTransparent margeTopDemiGrand border column">
        <form action="index.php?action=ParticipationActionMultiple" method="POST">

            <div class="center marge">
                <select name="choix" id="choix">
                    <option value="">Choix du tournois</option>
                    <?php
                    foreach ($evenements as $evenement) {
                        $tab = ParticipationManager::getCount($evenement->getIdEvenement());
                        foreach ($tab as $unite) {
                            $nombre = $unite;
                        }
                        $originalDate = $evenement->getDateEvenement();
                        $newDate = date("d-m-Y", strtotime($originalDate));
                        echo '<option value="' . $evenement->getIdEvenement() . '">' . $evenement->getNomEvenement() . ' / Du ' . $newDate .' / nombre inscrit : '.$nombre.' / nombre Max : '.$evenement->getNbMaxJoueur().'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="entete red ecritureBlanche">
                <div class="caseFlexQuart caseHeight"></div>
                <div class="caseFlex center caseHeight">Nom</div>
                <div class="caseFlex center caseHeight">Prenom</div>
                <div class="caseFlex center caseHeight">Mail</div>
                <div class="caseFlex center caseHeight">Telephone</div>
                <div class="caseFlex center caseHeight">Préférence</div>
                <div class="caseFlex center caseHeight">Modifier</div>
                <div class="caseFlex center caseHeight">Supprimer</div>

            </div>
            <div class="form column">
                <?php
                foreach ($participants as $participant) {
                    if($participant->getIdPreference()!==null)
                    $preference= $participant->getPreference()->getNomPreference();
                    else 
                    $preference="pas de preference";
                    echo '
                <div class="ligne ecritureBlanche">
                <div class="center caseFlexQuart caseHeight"><input type="checkbox" class="center" id="' . $participant->getIdParticipant() . '" name="participant[]" value="' . $participant->getIdParticipant() . '"></div>';
                    echo '<input class="habitue' . $participant->getIdParticipant() . '" type="text" id="idParticipant' . $participant->getIdParticipant() . '" name="idParticipant" value="' . $participant->getIdParticipant() . '" hidden>';
                    echo '<div class="caseFlex center caseHeight">' . $participant->getNomParticipant() . '</div>
                    <div class="caseFlex center caseHeight">' . $participant->getPrenomParticipant() . '</div>
                    <div class="caseFlex center caseHeight">' . $participant->getMailParticipant() . '</div>
                    <div class="caseFlex center caseHeight">' . $participant->getTelParticipant() . '</div>
                    <div class="caseFlex center caseHeight">' .$preference . '</div>
                    <div class="caseFlex center caseHeight">
                        <a class="boutonModif" href="index.php?action=formParticipant&m=modif&id=' .  $participant->getIdParticipant() . '"><div class="bouton modif center">Modifier</div> </a>
                    </div>
                    <div class="caseFlex center caseHeight">
                        <a class="boutonModif" href="index.php?action=ParticipantAction&m=suppr&id=' .  $participant->getIdParticipant() . '"><div class="bouton modif center">supprimer</div></a>  
                    </div>
                </div>
                ';
                }
                ?>
            </div>
            <div class="boutons center">
                <div class="bouton marge center">
                    <button class="menuListe" type="submit">Ajouter la selection au tournois</button>
                </div>
        </form>
        <form action="index.php?action=choixTournois" method="POST">
            <div class="bouton retour marge center">
                <button class="menuListe" type="submit">Retour</button>
            </div>
    </div>
    </form>
</div>
</div>