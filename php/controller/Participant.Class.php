<?php
class Participant
{
/*******************************Attributs*******************************/
private $_idParticipant;
private $_nomParticipant;
private $_prenomParticipant;
private $_mailParticipant;
private $_telParticipant;
private $_idPreference;
private $_preference;

/******************************Accesseurs*******************************/
public function getIdParticipant()
{
 return $this->_idParticipant;
}
public function setIdParticipant($_idParticipant)
{
 return $this->_idParticipant = $_idParticipant;
}
public function getNomParticipant()
{
 return $this->_nomParticipant;
}
public function setNomParticipant($_nomParticipant)
{
 return $this->_nomParticipant = $_nomParticipant;
}
public function getPrenomParticipant()
{
 return $this->_prenomParticipant;
}
public function setPrenomParticipant($_prenomParticipant)
{
 return $this->_prenomParticipant = $_prenomParticipant;
}
public function getMailParticipant()
{
 return $this->_mailParticipant;
}
public function setMailParticipant($_mailParticipant)
{
 return $this->_mailParticipant = $_mailParticipant;
}
public function getTelParticipant()
{
 return $this->_telParticipant;
}
public function setTelParticipant($_telParticipant)
{
 return $this->_telParticipant = $_telParticipant;
}
public function getIdPreference()
{
return $this->_idPreference;
}
public function setIdPreference($_idPreference)
{
    $this->_idPreference = $_idPreference;
    $idPreference=PreferenceManager::getById($_idPreference);
    $this->setPreference($idPreference);
}
public function getPreference()
{
 return $this->_preference;
}
public function setPreference($_preference)
{
 return $this->_preference = $_preference;
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
 return $this->getIdParticipant() . $this->getNomParticipant() . $this->getPrenomParticipant() . $this->getMailParticipant() . $this->getTelParticipant() ;
}

}