<?php

if($lvl < 1){
    header("Location: index.php");
}
$mode = $_GET["m"];
$a= new Participation($_POST);
$b= new Participant($_POST);
if($mode!='suppr')
$idEvenement=$_POST['IdEvenement'];
// echo $idEvenement;
// var_dump($a);
// var_dump($b);
switch ($mode)
{
    case "ajout":
        $nom=$b->getNomParticipant();
        $prenom=$b->getPrenomParticipant();
        $personneExistantDeja=ParticipantManager::getByNomAndPrenom($nom,$prenom);     // recherche si le nom et le prenom existe deja dans la BDD
        if (empty($personneExistantDeja))                                              //si le participant n'existe pas
        {
            ParticipantManager::add($b);                                               // on ajoute le participant
            $participants=ParticipantManager::getList();
            foreach($participants as $participant)
            {
                $idParticipant=$participant->getIdParticipant();
            }
        }
        else                                                                          //si le participant existe
        {
            ParticipantManager::update($b);                                           //on modifie le participant          
        }
        $participants=ParticipantManager::getByNomAndPrenom($b->getNomParticipant(),$b->getPrenomParticipant());
        foreach($participants as $participant)
        $idParticipant=$participant->getIdParticipant();
        // var_dump($participant);
        // echo $idParticipant;
        $personne=ParticipantManager::getById($idParticipant);
        // var_dump($personne);
        $participation=new Participation(["idParticipant"=>$personne->getIdParticipant(), "idEvenement"=>$idEvenement,"prevenu"=>$a->getPrevenu(), "presence"=>$a->getPresence(), "reglement"=>$a->getReglement()]);
        // var_dump($participation);  
        ParticipationManager::add($participation);
        break;
    case "modif":
        ParticipantManager::update($b);
        $participation=new Participation(["idParticipation"=>$a->getIdParticipation(), "idParticipant"=>$b->getIdParticipant(), "idEvenement"=>$idEvenement,"prevenu"=>$a->getPrevenu(), "presence"=>$a->getPresence(), "reglement"=>$a->getReglement()]);
        // var_dump($participation);
        // echo $b->getIdParticipant()."\n"; 
        // echo $idEvenement;
        ParticipationManager::update($participation);
        break;
    case "suppr":
        $a->setIdParticipation($_GET["id"]);                                       //on recupere l'id de la participation a supprimer
        ParticipationManager::delete($a);
        $idEvenement=$_GET["idEvenement"];
        break;
}

header('location:index.php?action=ParticipationListe&idEvenement='.$idEvenement); 
