<?php
class JoueurManager
{
    public static function add(Joueur $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO joueur (idParticipant,score0,score1,score2,score3,score4,score5,score6,idEvenement) VALUES (:idParticipant,:score0,:score1,:score2,:score3,:score4,:score5,:score6,:idEvenement)");
        $q->bindValue(":idParticipant", $obj->getIdParticipant());
        $q->bindValue(":score0", $obj->getScore0());
        $q->bindValue(":score1", $obj->getScore1());
        $q->bindValue(":score2", $obj->getScore2());
        $q->bindValue(":score3", $obj->getScore3());
        $q->bindValue(":score4", $obj->getScore4());
        $q->bindValue(":score5", $obj->getScore5());
        $q->bindValue(":score6", $obj->getScore6());
        $q->bindValue(":idEvenement", $obj->getIdEvenement());
        $q->execute();
    }

    public static function update(Joueur $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE joueur SET idParticipant=:idParticipant, score0=:score0, score1=:score1, score2=:score2, score3=:score3, score4=:score4, score5=:score5, score6=:score6, idEvenement=:idEvenement WHERE idJoueur=:idJoueur");
        $q->bindValue(":idJoueur", $obj->getIdJoueur());
        $q->bindValue(":idParticipant", $obj->getIdParticipant());
        $q->bindValue(":idEvenement", $obj->getIdEvenement());
        $q->bindValue(":score0", $obj->getScore0());
        $q->bindValue(":score1", $obj->getScore1());
        $q->bindValue(":score2", $obj->getScore2());
        $q->bindValue(":score3", $obj->getScore3());
        $q->bindValue(":score4", $obj->getScore4());
        $q->bindValue(":score5", $obj->getScore5());
        $q->bindValue(":score6", $obj->getScore6());
        $q->execute();
    }

    public static function delete(Joueur $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM joueur WHERE idJoueur=" . $obj->getIdJoueur());
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM joueur WHERE idJoueur=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new joueur($results);
        } else {
            return false;
        }
    }

    public static function getByIdEvenement($id)
    {
        $db = DbConnect::getDb();
        $joueur = [];
        $id = (int) $id;
        $q = $db->query("SELECT * FROM joueur WHERE idEvenement=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $joueur[] = new Joueur($donnees);
            }
        }
        return $joueur;
    }


    public static function getList()
    {
        $db = DbConnect::getDb();
        $joueur = [];
        $q = $db->query("SELECT * FROM joueur");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $joueur[] = new Joueur($donnees);
            }
        }
        return $joueur;
    }
}
