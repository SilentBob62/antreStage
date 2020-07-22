<?php

if($lvl < 1){
    header("Location: index.php");
}

$mode = $_GET["m"];
$a = new Lot($_POST);
var_dump($a);
// je ne fais qu'un update car le nombre de joueur reste le meme donc pas de dilete et le add est fait precedement
LotManager::update($a);

$idEvenement=$a->getIdEvenement();
$lots=LotManager::getListByIdEvenement($idEvenement);
// var_dump($lots);

header('location:index.php?action=ListeLot&idEvenement=' . $idEvenement);