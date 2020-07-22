<?php

if($lvl < 1){
    header("Location: index.php");
}

$mode = $_GET["m"];
$a = new Gagnant($_POST);
var_dump($a);
if (isset($_POST["idEvenenment"]))
{ 
    $idEvenement= $_POST["idEvenenment"];
    echo $idEvenement;
}
// echo $mode;


switch ($mode)
{
    case "ajout":
        if (isset($_POST["idEvenenment"]))
        {
            $gagnant=new Gagnant(["nomGagnant"=>$a->getNomGagnant(),"prenomGagnant"=>$a->getPrenomGagnant(),"idEvenement"=>$idEvenement]);
            GagnantManager::add($gagnant);
        }
        else if ($a->getNomGagnant()!='[object HTMLInputElement]' && $a->getNomGagnant()!='')
        {
             GagnantManager::add($a);
        }
    break;
    case "modif":
    break;
    case "suppr":
    break;
}
header("location:index.php?action=menu");  