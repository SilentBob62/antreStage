<?php
class ParticipantManager
{
public static function add(Participant $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO participant (nomParticipant,prenomParticipant,mailParticipant,telParticipant,idPreference) VALUES (:nomParticipant,:prenomParticipant,:mailParticipant,:telParticipant,:idPreference)");
$q->bindValue(":nomParticipant", $obj->getNomParticipant());
$q->bindValue(":prenomParticipant", $obj->getPrenomParticipant());
$q->bindValue(":mailParticipant", $obj->getMailParticipant());
$q->bindValue(":telParticipant", $obj->getTelParticipant());
$q->bindValue(":idPreference", $obj->getIdPreference());
 $q->execute();
}

public static function update(Participant $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE participant SET nomParticipant=:nomParticipant, prenomParticipant=:prenomParticipant, mailParticipant=:mailParticipant, telParticipant=:telParticipant, idPreference=:idPreference WHERE idParticipant=:idParticipant");
$q->bindValue(":nomParticipant", $obj->getNomParticipant());
$q->bindValue(":prenomParticipant", $obj->getPrenomParticipant());
$q->bindValue(":mailParticipant", $obj->getMailParticipant());
$q->bindValue(":telParticipant", $obj->getTelParticipant());
$q->bindValue(":idPreference", $obj->getIdPreference());
$q->bindValue(":idParticipant", $obj->getIdParticipant());
 $q->execute();
}

public static function delete(Participant $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM participant WHERE idParticipant=" . $obj->getIdParticipant());
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM participant WHERE idParticipant=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Participant ($results);
 }else {
return false;
}
}

public static function getByNomAndPrenom($nom,$prenom)
{
$db = DbConnect::getDb();
$participant = [];
$q = $db->query("SELECT * FROM participant Where nomParticipant='$nom' && prenomParticipant='$prenom'");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$participant[] = new Participant($donnees);
}
}
return $participant;
}

public static function getList()
{
$db = DbConnect::getDb();
$participant = [];
$q = $db->query("SELECT * FROM participant");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$participant[] = new Participant($donnees);
}
}
return $participant;
 }

 public static function getListOrderByPreference()
 {
 $db = DbConnect::getDb();
 $participant = [];
 $q = $db->query("SELECT * FROM participant ORDER BY idPreference desc");
 while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
 if ($donnees != false) {
 $participant[] = new Participant($donnees);
 }
 }
 return $participant;
  }

}