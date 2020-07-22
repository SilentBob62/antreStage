<?php
class Preference
{
/*******************************Attributs*******************************/
private $_idPreference;
private $_nomPreference;

/******************************Accesseurs*******************************/
public function getIdPreference()
{
return $this->_idPreference;
}
public function setIdPreference($_idPreference)
{
$this->_idPreference = $_idPreference;
return $this;
}
public function getNomPreference()
{
return $this->_nomPreference;
}
public function setNomPreference($_nomPreference)
{
$this->_nomPreference = $_nomPreference;
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
 return $this->getIdPreference() . $this->getNomPreference() ;
}



}