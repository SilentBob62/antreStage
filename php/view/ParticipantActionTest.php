<?php

if($lvl < 1){
    header("Location: index.php");
}

$mode = $_GET["m"];
$a = new Participant($_POST);
var_dump($a);
switch ($mode)
{
    case "modif":
        // echo $mode;
        // var_dump($a);
        ParticipantManager::update($a);
        break;  
    case "suppr":
        // echo $mode;
        // echo $_GET["id"];
        // $b= ParticipantManager::getById($_GET["id"]);
        // $participations=ParticipationManager::getListByIdParticipant($_GET["id"]);
        // var_dump($b);
        // var_dump($participations);
        foreach($participations as $participation)
        {
            // var_dump($participation);
            // echo $participation->getParticipant()->getNomParticipant().' sera supprimé de l evenement '.$participation->getEvenement()->getNomEvenement()."<br>";
            // ParticipationManager::delete($participation);
        }
        // echo $b->getPrenomParticipant() .' va etre supprimé';
        // var_dump($b);
        // ParticipantManager::delete($b);
        break;
}
header('location:index.php?action=ListeHabitue'); 