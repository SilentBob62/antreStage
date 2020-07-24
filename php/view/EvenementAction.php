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
        if ($nomjeuBDD===null)  // si le jeu n'existe pas dans la base de données
        JeuManager::add($b);    // je fais un ajout
        // var_dump($a);
        // var_dump($b);
        $nomJeu=$b->getNomJeu();
        $jeu=JeuManager::getByNomJeu($nomJeu); // on recherche le jeu qui correspond au nom du jeu
        $nomjeuBDD=$jeu->getNomJeu();
        $idjeuBDD=$jeu->getidJeu();
        $evenement = new Evenement (["nomEvenement"=>$a->getNomEvenement(), "cout"=>$a->getCout(), "nbMaxJoueur"=>$a->getNbMaxJoueur(), "dateEvenement"=>$a->getDateEvenement(), "idJeu"=>$idjeuBDD]);
        EvenementManager::add($evenement);  // on ajoute l'evenement
        break;  
    case "modif":
        // var_dump($a);
        // var_dump($b);      
        if ($nomjeuBDD===null)  // si le jeu n'existe pas dans la base de données 
        JeuManager::add($b);    // je fais un ajout
        $nomJeu=$b->getNomJeu();
        $jeu=JeuManager::getByNomJeu($nomJeu);
        $nomjeuBDD=$jeu->getNomJeu();
        if($a->getNomEvenement()!="")
        $nomEvenement=$a->getNomEvenement();
        else
        $nomEvenement=null;
        if($a->getCout()!="")
        $coutEvenement=$a->getCout();
        else
        $coutEvenement=null;
        if($a->getNbMaxJoueur()!="")
        $nbMax=$a->getNbMaxJoueur();
        else
        $nbMax=null;
        if($a->getDateEvenement()!="")
        $date=$a->getDateEvenement();
        else
        $date=null;
        if($jeu->getidJeu()!="")
        $idjeuBDD=$jeu->getidJeu();
        else
        $idjeuBDD=null;
        $evenement = new Evenement (["idEvenement"=>$a->getIdEvenement(), "nomEvenement"=>$nomEvenement, "cout"=>$coutEvenement, "nbMaxJoueur"=>$nbMax, "dateEvenement"=>$date, "idJeu"=>$idjeuBDD]);
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