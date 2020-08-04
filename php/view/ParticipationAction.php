<?php
$mode = $_GET["m"];
$a= new Participation($_POST);
$b= new Participant($_POST);
if($mode!='suppr')
{
    $idEvenement=$_POST['IdEvenement'];
    // echo $idEvenement;
}
// var_dump($a);
// var_dump($b);
$nom=strtoupper($b->getNomParticipant());
$prenom=strtolower($b->getPrenomParticipant());
$prenom=ucfirst($prenom);
$c=new Participant(["nomParticipant"=>$nom, "prenomParticipant"=>$prenom, "mailParticipant"=>$b->getMailParticipant(), "telParticipant"=>$b->getTelParticipant()]);
// var_dump($c);
switch($mode)
{
    case "ajout":
        $nom=$c->getNomParticipant();
        $prenom=$c->getPrenomParticipant();
        $personneExistantDeja=ParticipantManager::getByNomAndPrenom($nom,$prenom);     // recherche si le nom et le prenom existe deja dans la BDD
        // var_dump( $personneExistantDeja);
        if (empty($personneExistantDeja))                                              //si le participant n'existe pas
        {
            // echo "n'existe pas";
            ParticipantManager::add($c);                                           // on ajoute le participant
            $participants=ParticipantManager::getList();
            foreach($participants as $participant)
            {
                $idParticipant=$participant->getIdParticipant();
            }
            echo $idParticipant;
        }
        $participants=ParticipantManager::getByNomAndPrenom($c->getNomParticipant(),$c->getPrenomParticipant());
        foreach($participants as $participant)
        $idParticipant=$participant->getIdParticipant();
        // var_dump($participant);
        // echo $idParticipant;
        $personne=ParticipantManager::getById($idParticipant);
        // var_dump($personne);
        $participationExistant=ParticipationManager::getListByIdParticipantIdEvenement($idEvenement,$idParticipant);
        // var_dump($participationExistant);  
        // var_dump($participation);  
        if(empty($participationExistant))
        {
            // echo 'n existe pas encore';
            $participation=new Participation(["idParticipant"=>$personne->getIdParticipant(), "idEvenement"=>$idEvenement,"prevenu"=>$a->getPrevenu(), "presence"=>$a->getPresence(), "reglement"=>$a->getReglement(),"info"=>$a->getInfo()]);
            ParticipationManager::add($participation);
        }
        break;
    case "modif": 
        if($b->getNomParticipant())
        $nomParticipant=strtoupper($b->getNomParticipant());
        else  
        $nomParticipant=null;
        if($b->getPrenomParticipant())
        {
            $prenomParticipant=strtolower($b->getPrenomParticipant());
            $prenomParticipant=ucfirst($prenomParticipant);
        }
        else 
        $prenomParticipant=null;
        if($b->getMailParticipant())
        $mailParticipant=$b->getMailParticipant();
        else
        $mailParticipant=null;
        if($b->getTelParticipant())
        $telParticipant=$b->getTelParticipant();
        else
        $telParticipant=null;
        $joueur=new Participant(["idParticipant"=>$b->getIdParticipant(),"nomParticipant"=>$nomParticipant,"prenomParticipant"=>$prenomParticipant,"mailParticipant"=>$mailParticipant,"telParticipant"=>$telParticipant]);
        ParticipantManager::update($joueur);

        if($a->getPrevenu())
        $prevenu=$a->getPrevenu();
        else
        $prevenu=null;

        if($a->getPresence())
        $presence=$a->getPresence();
        else
        $presence=null;

        if($a->getReglement())
        $reglement=$a->getReglement();
        else
        $reglement=null;

        if($a->getInfo())
        $info=$a->getInfo();
        else
        $info=null;

        $participe=new Participation(["idParticipation"=>$a->getIdParticipation(),"idParticipant"=>$b->getIdParticipant(),"idEvenement"=>$idEvenement,"prevenu"=>$prevenu,"presence"=>$presence,"reglement"=>$reglement,"info"=>$info]);
        ParticipationManager::update( $participe);
    //    var_dump($participe);
    break;
    case "suppr":
        $a->setIdParticipation($_GET["id"]);
        ParticipationManager::delete($a);
        $idEvenement=$_GET["idEvenement"];
    break;
}


header('location:index.php?action=ParticipationListe&idEvenement='.$idEvenement); 