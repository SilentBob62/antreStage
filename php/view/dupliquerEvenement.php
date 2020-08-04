<?php
if ($lvl < 1) {
    header("Location: index.php");
}
$idEvenement=$_GET['idEvenement'];
$evenementADuppliquer=EvenementManager::getById($idEvenement);
$participations=ParticipationManager::getListByIdEvenement($idEvenement);


$nouvelEvenement=new Evenement(["nomEvenement"=>$evenementADuppliquer->getNomEvenement().' Dupliqué', "cout"=>$evenementADuppliquer->getCout(), "nbMaxJoueur"=>$evenementADuppliquer->getNbMaxJoueur(), "idJeu"=>$evenementADuppliquer->getIdJeu()]);
// var_dump($nouvelEvenement);
EvenementManager::add($nouvelEvenement);
// echo $idNouvelEvenement;

$evenementList=EvenementManager::getList();

foreach($evenementList as $evenement)
{
    $idNouvelEvenement=$evenement->getIdEvenement();
}


foreach($participations as $participation)
{
    // var_dump($participation);
    $idParticipant=$participation->getIdParticipant();
    $participe=new Participation(["idparticipation"=>null,"idEvenement"=>$idNouvelEvenement,"idParticipant"=>$idParticipant]);
    // var_dump($participe);
    ParticipationManager::add($participe);
}

header('location:index.php?action=evenementListe'); 