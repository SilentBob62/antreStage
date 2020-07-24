<?php

if($lvl < 1){
    header("Location: index.php");
}

$mode = $_GET["m"];
$a = new Gagnant($_POST);
// var_dump($a);
if (isset($_POST["idEvenenment"]))  // si le $_POST["idEvenenment"] est defini
{ 
    $idEvenement= $_POST["idEvenenment"];
    // echo $idEvenement;
}
// echo $mode;


switch ($mode)
{
    case "ajout":
        if (isset($_POST["idEvenenment"])) // si le $_POST["idEvenenment"] est defini
        {
            $nomGagnant=strtoupper($a->getNomGagnant());
            $prenomGagnant=strtolower($a->getPrenomGagnant());
            $prenomGagnant=ucfirst($prenomGagnant);
            $gagnant=new Gagnant(["nomGagnant"=>$nomGagnant,"prenomGagnant"=>$prenomGagnant,"idEvenement"=>$idEvenement]);
            GagnantManager::add($gagnant);
        }
        else if ($a->getNomGagnant()!='[object HTMLInputElement]' && $a->getNomGagnant()!='') // si l'input est rempli est qu'il est different de rien
        {
             GagnantManager::add($a);
        }
    break;
    case "modif":
    break;
    case "suppr":
    break;
}
header("location:index.php?action=listeGagnant");  