<?php
class Lot
{
/*******************************Attributs*******************************/
private $_idLot;
private $_nomLot;
private $_idEvenement;
private $_evenement;

/******************************Accesseurs*******************************/
public function getIdLot()
{
return $this->_idLot;
}
public function setIdLot($_idLot)
{
$this->_idLot = $_idLot;
return $this;
}
public function getNomLot()
{
return $this->_nomLot;
}
public function setNomLot($_nomLot)
{
$this->_nomLot = $_nomLot;
return $this;
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
return $this;
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
 return $this->getIdLot() . $this->getNomLot() ;
}

}