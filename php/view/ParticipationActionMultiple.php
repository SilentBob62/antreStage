<?php
if($lvl < 1){
    header("Location: index.php");
}

$listeParticipants = ParticipantManager::getList();
$listeParticipations = ParticipationManager::getList();
echo $_POST["choix"];
var_dump($_POST["choix"]);
if ($_POST["choix"] === '' || empty($_POST['participant'])) {
    header('location:index.php?action=ListeHabitue');
} else {
    $idEvenement = $_POST["choix"];
    $evenement = EvenementManager::getById($idEvenement);

    // var_dump($evenement);

    $participants = $_POST['participant'];
    $i = 1;
    foreach ($participants as $participant) {
        //   echo $participant;
        $tabIdParticipant[$i] = $participant;
        $i++;
    }
    // var_dump($tabIdParticipant);

    foreach ($tabIdParticipant as $idParticipant) {   //pour chaque personne selectionné
        $participant = ParticipantManager::getById($idParticipant);

        $participationExistant=ParticipationManager::getListByIdParticipantIdEvenement($idEvenement,$participant->getIdParticipant());
        // var_dump( $participationExistant[0]);
        if(!isset($participationExistant[0]))       // si il n'existe pas déja, permet d'eviter les doublons                                                                    // si il existe pas encore on créer la participation
        {
             // echo 'participation existe pas';
            $participation = new Participation(["idParticipant" => $participant->getIdParticipant(), "idEvenement" => $idEvenement]);
            // var_dump($participation);
            ParticipationManager::add($participation);
        }
    }
    // echo 'location:index.php?action=ParticipationListe&idEvenement='.$idEvenement;

    header('location:index.php?action=ParticipationListe&idEvenement=' . $idEvenement);
}
