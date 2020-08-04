<?php

$a=new Joueur($_POST);
$mode = $_GET["m"];

switch($mode)
{
    case "ajout":
        $idParticipants=$_POST;
        foreach($idParticipants as $idParticipant)
        {
            $joueur=new Joueur(["idParticipant"=>$idParticipant,"idEvenement"=>$_GET['idEvenement']]);
            JoueurManager::add($joueur);
        }
    break;
    case "modif":        
        $a=new Joueur($_POST);
        $joueur=JoueurManager::getById($a->getIdJoueur());
        $idEvenement=$_GET['idEvenement'];
        $score=$_GET['score'];

        if($a->getScore0()=="")
        $score0=null;
        else
        $score0=$a->getScore0();

        if($a->getScore1()=="")
        $score1=null;
        else
        $score1=$a->getScore1();

        if($a->getScore2()=="")
        $score2=null;
        else
        $score2=$a->getScore2();
        
        if($a->getScore3()=="")
        $score3=null;
        else
        $score3=$a->getScore3();

        if($a->getScore4()=="")
        $score4=null;
        else
        $score4=$a->getScore4();

        if($a->getScore5()=="")
        $score5=null;
        else
        $score5=$a->getScore5();

        if($a->getScore6()=="")
        $score6=null;
        else
        $score6=$a->getScore6();

        switch($score)
        {
            case 0: 
                $joueurAJour= new Joueur(["idJoueur"=>$joueur->getIdJoueur(),"idParticipant"=>$joueur->getIdParticipant(),"score0"=>$score0,"score1"=>$joueur->getScore1()
                ,"score2"=>$joueur->getScore2(),"score3"=>$joueur->getScore3(),"score4"=>$joueur->getScore4(),"score5"=>$joueur->getScore5(),"score6"=>$joueur->getScore6(),"idEvenement"=> $idEvenement]);
            break;
            case 1:
                $joueurAJour= new Joueur(["idJoueur"=>$joueur->getIdJoueur(),"idParticipant"=>$joueur->getIdParticipant(),"score0"=>$joueur->getScore0(),"score1"=>$score1
                ,"score2"=>$joueur->getScore2(),"score3"=>$joueur->getScore3(),"score4"=>$joueur->getScore4(),"score5"=>$joueur->getScore5(),"score6"=>$joueur->getScore6(),"idEvenement"=> $idEvenement]);
            break;
            case 2:
                $joueurAJour= new Joueur(["idJoueur"=>$joueur->getIdJoueur(),"idParticipant"=>$joueur->getIdParticipant(),"score0"=>$joueur->getScore0(),"score1"=>$joueur->getScore1()
                ,"score2"=>$score2,"score3"=>$joueur->getScore3(),"score4"=>$joueur->getScore4(),"score5"=>$joueur->getScore5(),"score6"=>$joueur->getScore6(),"idEvenement"=> $idEvenement]);
            break;
            case 3:
                $joueurAJour= new Joueur(["idJoueur"=>$joueur->getIdJoueur(),"idParticipant"=>$joueur->getIdParticipant(),"score0"=>$joueur->getScore0(),"score1"=>$joueur->getScore1()
                ,"score2"=>$joueur->getScore2(),"score3"=>$score3,"score4"=>$joueur->getScore4(),"score5"=>$joueur->getScore5(),"score6"=>$joueur->getScore6(),"idEvenement"=> $idEvenement]);
            break;
            case 4:
                $joueurAJour= new Joueur(["idJoueur"=>$joueur->getIdJoueur(),"idParticipant"=>$joueur->getIdParticipant(),"score0"=>$joueur->getScore0(),"score1"=>$joueur->getScore1()
                ,"score2"=>$joueur->getScore2(),"score3"=>$joueur->getScore3(),"score4"=>$score4,"score5"=>$joueur->getScore5(),"score6"=>$joueur->getScore6(),"idEvenement"=> $idEvenement]);
            break;
            case 5:
                $joueurAJour= new Joueur(["idJoueur"=>$joueur->getIdJoueur(),"idParticipant"=>$joueur->getIdParticipant(),"score0"=>$joueur->getScore0(),"score1"=>$joueur->getScore1()
                ,"score2"=>$joueur->getScore2(),"score3"=>$joueur->getScore3(),"score4"=>$joueur->getScore4(),"score5"=>$score5,"score6"=>$joueur->getScore6(),"idEvenement"=> $idEvenement]);
            break;
            case 6:
                $joueurAJour= new Joueur(["idJoueur"=>$joueur->getIdJoueur(),"idParticipant"=>$joueur->getIdParticipant(),"score0"=>$joueur->getScore0(),"score1"=>$joueur->getScore1()
                ,"score2"=>$joueur->getScore2(),"score3"=>$joueur->getScore3(),"score4"=>$joueur->getScore4(),"score5"=>$joueur->getScore5(),"score6"=>$score6,"idEvenement"=> $idEvenement]);
            break;
        }
        JoueurManager::update($joueurAJour);
    break;
    case "suppr":
        $idEvenement=$_GET['idEvenement'];
        $joueurs=JoueurManager::getByIdEvenement($idEvenement);
        foreach($joueurs as $joueur)
        {
            JoueurManager::delete($joueur);
        }
    break;
}

$idEvenement=$_GET['idEvenement'];
$poolA=$_GET['nbPoolA'];
$poolB=$_GET['nbPoolB'];
$nbPool=$_GET['nbPool'];

header('location:index.php?action=tournoi&idEvenement=' . $idEvenement.'&nbPoolA='.$poolA.'&nbPoolB='.$poolB.'&nbPool='.$nbPool);