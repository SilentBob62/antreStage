<?php

if($lvl < 1){
    header("Location: index.php");
}

$mode = $_GET["m"];
$a = new Participant($_POST);
// var_dump($a);
switch ($mode)
{
    case "modif":
        // echo $mode;
        // var_dump($a);
        ParticipantManager::update($a);
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
header('location:index.php?action=ListeHabitue'); 