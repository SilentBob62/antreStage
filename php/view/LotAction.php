<?php

if($lvl < 1){
    header("Location: index.php");
}

$mode = $_GET["m"];
$a = new Lot($_POST);
var_dump($a);
LotManager::update($a);

$idEvenement=$a->getIdEvenement();
$lots=LotManager::getListByIdEvenement($idEvenement);
// var_dump($lots);

header('location:index.php?action=ListeLot&idEvenement=' . $idEvenement);