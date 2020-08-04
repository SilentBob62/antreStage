<?php
class Evenement
{
/*******************************Attributs*******************************/
private $_idEvenement;
private $_nomEvenement;
private $_cout;
private $_nbMaxJoueur;
private $_dateEvenement;
private $_idJeu;
private $_jeu;
private $_informationSupplementaire;

/******************************Accesseurs*******************************/
public function getIdEvenement()
{
 return $this->_idEvenement;
}
public function setIdEvenement($_idEvenement)
{
 return $this->_idEvenement = $_idEvenement;
}
public function getNomEvenement()
{
 return $this->_nomEvenement;
}
public function setNomEvenement($_nomEvenement)
{
 return $this->_nomEvenement = $_nomEvenement;
}
public function getCout()
{
 return $this->_cout;
}
public function setCout($_cout)
{
 return $this->_cout = $_cout;
}
public function getNbMaxJoueur()
{
 return $this->_nbMaxJoueur;
}
public function setNbMaxJoueur($_nbMaxJoueur)
{
 return $this->_nbMaxJoueur = $_nbMaxJoueur;
}
public function getDateEvenement()
{
 return $this->_dateEvenement;
}
public function setDateEvenement($_dateEvenement)
{
 return $this->_dateEvenement = $_dateEvenement;
}
public function getIdJeu()
{
 return $this->_idJeu;
}
public function setIdJeu($_idJeu)
{
    $this->_idJeu = $_idJeu;
    $jeu=JeuManager::getById($_idJeu);
    $this->setJeu($jeu);
}
public function getJeu()
{
 return $this->_jeu;
}
public function setJeu($_jeu)
{
 return $this->_jeu = $_jeu;
}
public function getInformationSupplementaire()
{
return $this->_informationSupplementaire;
}
public function setInformationSupplementaire($_informationSupplementaire)
{
$this->_informationSupplementaire = $_informationSupplementaire;
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
 return $this->getIdEvenement() . $this->getNomEvenement() . $this->getCout() . $this->getNbMaxJoueur() . $this->getDateEvenement() . $this->getIdJeu() ;
}


}