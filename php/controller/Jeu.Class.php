<?php
class Jeu
{
/*******************************Attributs*******************************/
private $_idJeu;
private $_nomJeu;

/******************************Accesseurs*******************************/
public function getIdJeu()
{
 return $this->_idJeu;
}
public function setIdJeu($_idJeu)
{
 return $this->_idJeu = $_idJeu;
}
public function getNomJeu()
{
 return $this->_nomJeu;
}
public function setNomJeu($_nomJeu)
{
 return $this->_nomJeu = $_nomJeu;
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
 return $this->getIdJeu() . $this->getNomJeu() ;
}

}