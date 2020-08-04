<?php
class Participation
{
/*******************************Attributs*******************************/
private $_idParticipation;
private $_idParticipant;
private $_participant;
private $_idEvenement;
private $_evenement;
private $_prevenu;
private $_presence;
private $_reglement;
private $info;

/******************************Accesseurs*******************************/
public function getIdParticipation()
{
 return $this->_idParticipation;
}
public function setIdParticipation($_idParticipation)
{
 return $this->_idParticipation = $_idParticipation;
}
public function getIdParticipant()
{
 return $this->_idParticipant;
}
public function setIdParticipant($_idParticipant)
{
    $this->_idParticipant = $_idParticipant;
    $idParticipant=ParticipantManager::getById($_idParticipant);
    $this->setParticipant($idParticipant);
}
public function getParticipant()
{
return $this->_participant;
}
public function setParticipant($_participant)
{
return $this->_participant = $_participant;
}
public function getIdEvenement()
{
 return $this->_idEvenement;
}
public function setIdEvenement($_idEvenement)
{
    $this->_idEvenement = $_idEvenement;
    $idEvenement=EvenementManager::getById($_idEvenement);
    $this->setEvenement($idEvenement);
}
public function getEvenement()
{
return $this->_evenement;
}
public function setEvenement($_evenement)
{
return $this->_evenement = $_evenement;
}
public function getPrevenu()
{
 return $this->_prevenu;
}
public function setPrevenu($_prevenu)
{
 return $this->_prevenu = $_prevenu;
}
public function getPresence()
{
 return $this->_presence;
}
public function setPresence($_presence)
{
 return $this->_presence = $_presence;
}
public function getReglement()
{
 return $this->_reglement;
}
public function setReglement($_reglement)
{
 return $this->_reglement = $_reglement;
}
public function getInfo()
{
return $this->info;
}
public function setInfo($info)
{
$this->info = $info;
return $this;
}

/*******************************Construct*******************************/
public function __construct(array $options = [])
    {
        if (!empty($options))
        {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode])))
            {
                $this->$methode($value);
            }
        }
    }

/****************************Autres méthodes****************************/
public function toString() 
{ 
 return $this->getIdParticipation() . $this->getIdParticipant() . $this->getIdEvenement() . $this->getPrevenu() . $this->getPresence() . $this->getReglement() ;
}


}