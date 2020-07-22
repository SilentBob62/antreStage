<?php
class Gagnant
{
/*******************************Attributs*******************************/
private $_idGagnant;
private $_nomGagnant;
private $_prenomGagnant;
private $_idEvenement;
private $_evenement;

/******************************Accesseurs*******************************/
public function getIdGagnant()
{
 return $this->_idGagnant;
}
public function setIdGagnant($_idGagnant)
{
 return $this->_idGagnant = $_idGagnant;
}
public function getNomGagnant()
{
 return $this->_nomGagnant;
}
public function setNomGagnant($_nomGagnant)
{
 return $this->_nomGagnant = $_nomGagnant;
}
public function getPreNomGagnant()
{
 return $this->_prenomGagnant;
}
public function setPreNomGagnant($_prenomGagnant)
{
 return $this->_prenomGagnant = $_prenomGagnant;
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
$this->_evenement = $_evenement;
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
 return $this->getIdGagnant() . $this->getNomGagnant() ;
}



}