<?php

if($lvl < 1){
    header("Location: index.php");
}

$mode = $_GET["m"];

$a = new Participant($_POST);
$b=new Preference($_POST);
switch ($mode)
{
    case "ajout":
        ParticipantManager::add($a);
    break;
    case "modif":
        if($a->getNomParticipant())
        $nomParticipant=strtoupper($a->getNomParticipant());
        else  
        $nomParticipant=null;
        if($a->getPrenomParticipant())
        {
            $prenomParticipant=strtolower($a->getPrenomParticipant());
            $prenomParticipant=ucfirst($prenomParticipant);
        }
        else 
        $prenomParticipant=null;

        $participants=ParticipantManager::getByNomAndPrenom($nomParticipant,$prenomParticipant);

        foreach($participants as $participant)
        {
            $participant=$participant;
        }

        if($a->getMailParticipant())
        $mailParticipant=$a->getMailParticipant();
        else if($participant->getMailParticipant())
        $mailParticipant=$participant->getMailParticipant();
        else
        $mailParticipant=null;

        if($a->getTelParticipant())
        $telParticipant=$a->getTelParticipant();
        else if($participant->getTelParticipant())
        $telParticipant=$a->getTelParticipant();
        else
        $telParticipant=null;

        if($a->getIdPreference())
        $idpreference=$a->getIdPreference();
        else if ($participant->getIdPreference())
        $idpreference=$participant->getIdPreference();
        else
        $idpreference=null;
        
        $joueur=new Participant(["idParticipant"=>$a->getIdParticipant(),"nomParticipant"=>$nomParticipant,"prenomParticipant"=>$prenomParticipant,"mailParticipant"=>$mailParticipant,"telParticipant"=>$telParticipant,"idPreference"=>$idpreference]);
        // var_dump($joueur);
        ParticipantManager::update($joueur);
        // echo $mode;
        // var_dump($a);
        // ParticipantManager::update($a);
        break;  
    case "suppr":                                                                            // si on supprime un participant
        // echo $mode;
        // echo $_GET["id"];
        $b= ParticipantManager::getById($_GET["id"]);                                        // je recupere l'id du participant              
        $participations=ParticipationManager::getListByIdParticipant($_GET["id"]);           // je recupere toute les participations ou le participant est inscrit                 
        // var_dump($b);
        // var_dump($participations);
        foreach($participations as $participation)                                           // pour chaque participation de la personne qui sera supprimé     
        {
            // var_dump($participation);
            // echo $participation->getParticipant()->getNomParticipant().' sera supprimé de l evenement '.$participation->getEvenement()->getNomEvenement()."<br>";
            ParticipationManager::delete($participation);                                    // je la supprime          
        }
        // echo $b->getPrenomParticipant() .' va etre supprimé';
        // var_dump($b);
        ParticipantManager::delete($b);                                                       // puis je supprime le participant      
        break;
}
if ($_GET["origine"]=="form")
header('location:index.php?action=ListeHabitue'); 
else
header('location:index.php?action=ListeJoueur'); 