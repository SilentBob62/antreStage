<?php
class Joueur
{
/*******************************Attributs*******************************/
private $_idJoueur;
private $_idParticipant;
private $_Participant;
private $score0;
private $score1;
private $score2;
private $score3;
private $score4;
private $score5;
private $score6;
private $score7;
private $_idEvenement;
private $_evenement;
/******************************Accesseurs*******************************/
public function getIdJoueur()
{
return $this->_idJoueur;
}
public function setIdJoueur($_idJoueur)
{
$this->_idJoueur = $_idJoueur;
return $this;
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
return $this;
}
public function getParticipant()
{
return $this->_Participant;
}
public function setParticipant($_Participant)
{
$this->_Participant = $_Participant;
return $this;
}
public function getScore0()
{
return $this->score0;
}
public function setScore0($score0)
{
$this->score0 = $score0;
return $this;
}
public function getScore1()
{
return $this->score1;
}
public function setScore1($score1)
{
$this->score1 = $score1;
return $this;
}
public function getScore2()
{
return $this->score2;
}
public function setScore2($score2)
{
$this->score2 = $score2;

return $this;
}
public function getScore3()
{
return $this->score3;
}
public function setScore3($score3)
{
$this->score3 = $score3;
return $this;
}
public function getScore4()
{
return $this->score4;
}
public function setScore4($score4)
{
$this->score4 = $score4;

return $this;
}
public function getScore5()
{
return $this->score5;
}
public function setScore5($score5)
{
$this->score5 = $score5;
return $this;
}
public function getScore6()
{
return $this->score6;
}
public function setScore6($score6)
{
$this->score6 = $score6;
return $this;
}
public function getScore7()
{
return $this->score7;
}
public function setScore7($score7)
{
$this->score7 = $score7;
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
 return $this->getIdJoueur();
}

}