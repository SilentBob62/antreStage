<?php
$mode = $_GET["m"];
$a = new Participation($_POST);
$b = new Participant($_POST);
$e = EvenementManager::getById($_POST['idEvenement']);
$idEvenement=$_POST['idEvenement'];
$nom = strtoupper($b->getNomParticipant());
$prenom = strtolower($b->getPrenomParticipant());
$prenom = ucfirst($prenom);
$c = new Participant(["nomParticipant" => $nom, "prenomParticipant" => $prenom, "mailParticipant" => $b->getMailParticipant(), "telParticipant" => $b->getTelParticipant()]);
var_dump($b);
var_dump($c);
$nom = $c->getNomParticipant();
$prenom = $c->getPrenomParticipant();
$personneExistantDeja = ParticipantManager::getByNomAndPrenom($nom, $prenom);     // recherche si le nom et le prenom existe deja dans la BDD
// var_dump( $personneExistantDeja);
if (empty($personneExistantDeja))                                              //si le participant n'existe pas
{
    // echo "n'existe pas";
    ParticipantManager::add($c);                                           // on ajoute le participant
    $participants = ParticipantManager::getList();
    foreach ($participants as $participant) {
        $idParticipant = $participant->getIdParticipant();
    }
    echo $idParticipant;
}
$participants = ParticipantManager::getByNomAndPrenom($c->getNomParticipant(), $c->getPrenomParticipant());
foreach ($participants as $participant)
    $idParticipant = $participant->getIdParticipant();
// var_dump($participant);
// echo $idParticipant;
$personne = ParticipantManager::getById($idParticipant);
// var_dump($personne);
$participationExistant = ParticipationManager::getListByIdParticipantIdEvenement($idEvenement, $idParticipant);
// var_dump($participationExistant);  
// var_dump($participation);  
if (empty($participationExistant)) {
    // echo 'n existe pas encore';
    $participation = new Participation(["idParticipant" => $personne->getIdParticipant(), "idEvenement" => $idEvenement, "prevenu" => $a->getPrevenu(), "presence" => $a->getPresence(), "reglement" => $a->getReglement()]);
    ParticipationManager::add($participation);
}

header('location:index.php?action=formEnregistrementInternet'); 