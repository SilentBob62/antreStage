<?php
$mode = $_GET["m"];
$a= new Participation($_POST);
$b= new Participant($_POST);
if($mode!='suppr')
{
    $idEvenement=$_POST['IdEvenement'];
    // echo $idEvenement;
}



switch($mode)
{
    case "ajout":
        $nom=$b->getNomParticipant();
        $prenom=$b->getPrenomParticipant();
        $personneExistantDeja=ParticipantManager::getByNomAndPrenom($nom,$prenom);     // recherche si le nom et le prenom existe deja dans la BDD
        // var_dump( $personneExistantDeja);
        if (empty($personneExistantDeja))                                              //si le participant n'existe pas
        {
            ParticipantManager::add($b);                                           // on ajoute le participant
            $participants=ParticipantManager::getList();
            foreach($participants as $participant)
            {
                $idParticipant=$participant->getIdParticipant();
            }
        }
        $participants=ParticipantManager::getByNomAndPrenom($b->getNomParticipant(),$b->getPrenomParticipant());
        foreach($participants as $participant)
        $idParticipant=$participant->getIdParticipant();
        // var_dump($participant);
        // echo $idParticipant;
        $personne=ParticipantManager::getById($idParticipant);
        // var_dump($personne);
        $participationExistant=ParticipationManager::getListByIdParticipantIdEvenement($idEvenement,$idParticipant);
        // var_dump($participationExistant);  
        // var_dump($participation);  
        if(empty($participationExistant))
        {
            // echo 'n existe pas encore';
            $participation=new Participation(["idParticipant"=>$personne->getIdParticipant(), "idEvenement"=>$idEvenement,"prevenu"=>$a->getPrevenu(), "presence"=>$a->getPresence(), "reglement"=>$a->getReglement()]);
            ParticipationManager::add($participation);
        }
        break;
    case "modif": 
        echo $b->getNomParticipant()." participant a modifier"."<br>";
        ParticipantManager::update($b);
        echo $a->getIdParticipation() ." participation a modifier"."<br>";
        ParticipationManager::update($a);
       
    break;
    case "suppr":
        $a->setIdParticipation($_GET["id"]);
        ParticipationManager::delete($a);
        $idEvenement=$_GET["idEvenement"];
    break;
}


header('location:index.php?action=ParticipationListe&idEvenement='.$idEvenement); 