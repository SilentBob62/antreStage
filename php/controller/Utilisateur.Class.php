<?php
class Utilisateur
{
/*******************************Attributs*******************************/
private $_idUtilisateur;
private $_pseudo;
private $_mdp;
private $_role;

/******************************Accesseurs*******************************/
public function getIdUtilisateur()
{
 return $this->_idUtilisateur;
}
public function setIdUtilisateur($_idUtilisateur)
{
 return $this->_idUtilisateur = $_idUtilisateur;
}
public function getPseudo()
{
 return $this->_pseudo;
}
public function setPseudo($_pseudo)
{
 return $this->_pseudo = $_pseudo;
}
public function getMdp()
{
 return $this->_mdp;
}
public function setMdp($_mdp)
{
 return $this->_mdp = $_mdp;
}
public function getRole()
{
 return $this->_role;
}
public function setRole($_role)
{
 return $this->_role = $_role;
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
 return $this->getIdUtilisateur() . $this->getPseudo() . $this->getMdp() . $this->getRole() ;
}

}