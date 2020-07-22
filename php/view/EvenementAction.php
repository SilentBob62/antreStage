<?php

if($lvl < 1){
    header("Location: index.php");
}

$mode = $_GET["m"];
$a = new Evenement($_POST);
$b = new jeu($_POST);
$nomJeu=$b->getNomJeu();
$jeu=JeuManager::getByNomJeu($nomJeu);
$nomjeuBDD=$jeu->getNomJeu();
$idjeuBDD=$jeu->getidJeu();
switch ($mode)
{
    case "ajout":
        if ($nomjeuBDD===null)
        JeuManager::add($b); 
        // var_dump($a);
        // var_dump($b);
        $nomJeu=$b->getNomJeu();
        $jeu=JeuManager::getByNomJeu($nomJeu);
        $nomjeuBDD=$jeu->getNomJeu();
        $idjeuBDD=$jeu->getidJeu();
        $evenement = new Evenement (["nomEvenement"=>$a->getNomEvenement(), "cout"=>$a->getCout(), "nbMaxJoueur"=>$a->getNbMaxJoueur(), "dateEvenement"=>$a->getDateEvenement(), "idJeu"=>$idjeuBDD]);
        // var_dump($evenement);
        EvenementManager::add($evenement);
        break;  
    case "modif":
        // var_dump($a);
        // var_dump($b);      
        if ($nomjeuBDD===null)
        JeuManager::add($b);
        $nomJeu=$b->getNomJeu();
        $jeu=JeuManager::getByNomJeu($nomJeu);
        $nomjeuBDD=$jeu->getNomJeu();
        $idjeuBDD=$jeu->getidJeu();
        $evenement = new Evenement (["idEvenement"=>$a->getIdEvenement(), "nomEvenement"=>$a->getNomEvenement(), "cout"=>$a->getCout(), "nbMaxJoueur"=>$a->getNbMaxJoueur(), "dateEvenement"=>$a->getDateEvenement(), "idJeu"=>$idjeuBDD]);
        // var_dump($evenement);
        EvenementManager::update($evenement);

        break;  
    case "suppr":
        $a->setIdEvenement($_GET["id"]); 
        $participations=ParticipationManager::getListByIdEvenement($_GET["id"]);
        foreach($participations as $participation)
        {
            ParticipationManager::delete($participation);
        }
        EvenementManager::delete($a);
        break;  
}
header("location:index.php?action=evenementListe");   