<?php
class ParticipationManager
{
    public static function add(Participation $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO participation (idParticipant,idEvenement,prevenu,presence,reglement) VALUES (:idParticipant,:idEvenement,:prevenu,:presence,:reglement)");
        $q->bindValue(":idParticipant", $obj->getIdParticipant());
        $q->bindValue(":idEvenement", $obj->getIdEvenement());
        $q->bindValue(":prevenu", $obj->getPrevenu());
        $q->bindValue(":presence", $obj->getPresence());
        $q->bindValue(":reglement", $obj->getReglement());
        $q->execute();
    }

    public static function update(Participation $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE participation SET idParticipant=:idParticipant, idEvenement=:idEvenement, prevenu=:prevenu, presence=:presence, reglement=:reglement WHERE idParticipation=:idParticipation");
        $q->bindValue(":idParticipant", $obj->getIdParticipant());
        $q->bindValue(":idEvenement", $obj->getIdEvenement());
        $q->bindValue(":prevenu", $obj->getPrevenu());
        $q->bindValue(":presence", $obj->getPresence());
        $q->bindValue(":reglement", $obj->getReglement());
        $q->bindValue(":idParticipation", $obj->getIdParticipation());
        $q->execute();
    }

    public static function delete(Participation $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM participation WHERE idParticipation=" . $obj->getIdParticipation());
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM participation WHERE idParticipation=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Participation($results);
        } else {
            return false;
        }
    }

    public static function getListByIdEvenement($id)
    {
        $db = DbConnect::getDb();
        $participation = [];
        $q = $db->query("SELECT * FROM participation WHERE idEvenement=$id ");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $participation[] = new Participation($donnees);
            }
        }
        return $participation;
    }

    public static function getListByIdEvenementOrderByNom($id)
    {
        $db = DbConnect::getDb();
        $participation = [];
        $q = $db->query("SELECT * FROM participation INNER JOIN participant WHERE participant.idParticipant = participation.idParticipant AND participation.idEvenement=$id ORDER BY nomParticipant, prenomParticipant");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $participation[] = new Participation($donnees);
            }
        }
        return $participation;
    }

    public static function getListByIdParticipant($id)
    {
        $db = DbConnect::getDb();
        $participation = [];
        $q = $db->query("SELECT * FROM participation WHERE idParticipant=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $participation[] = new Participation($donnees);
            }
        }
        return $participation;
    }

    public static function getListByIdParticipantIdEvenement($idEvenement, $idParticipant)
    {
        $db = DbConnect::getDb();
        $participation = [];
        $q = $db->query("SELECT * FROM participation WHERE idParticipant=$idParticipant && idEvenement=$idEvenement");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $participation[] = new Participation($donnees);
            }
        }
        return $participation;
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $participation = [];
        $q = $db->query("SELECT * FROM participation");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $participation[] = new Participation($donnees);
            }
        }
        return $participation;
    }

    public static function getCount($idEvenement)
    {
        $db = DbConnect::getDb();
        $q = $db->query("SELECT count(idParticipation) FROM participation WHERE idEvenement=$idEvenement");
        $donnees = $q->fetch(PDO::FETCH_UNIQUE);
        return $donnees;
    }

    public static function getListRandom($id)
    {
        $db = DbConnect::getDb();
        $participation = [];
        $q = $db->query("SELECT * FROM participation WHERE idEvenement=$id ORDER BY RAND( )");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $participation[] = new Participation($donnees);
            }
        }
        return $participation;
    }   
} 