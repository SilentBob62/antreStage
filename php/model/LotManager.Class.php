<?php
class LotManager
{
public static function add(Lot $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO lot (nomLot,idEvenement) VALUES (:nomLot,:idEvenement)");
$q->bindValue(":nomLot", $obj->getNomLot());
$q->bindValue(":idEvenement", $obj->getIdEvenement());
 $q->execute();
}

public static function update(Lot $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE lot SET nomLot=:nomLot, idEvenement=:idEvenement WHERE idLot=:idLot");
$q->bindValue(":nomLot", $obj->getNomLot());
$q->bindValue(":idEvenement", $obj->getIdEvenement());
$q->bindValue(":idLot", $obj->getIdLot());
 $q->execute();
}

public static function delete(Lot $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM lot WHERE idLot=" . $obj->getIdLot());
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM lot WHERE idLot=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Lot ($results);
 }else {
return false;
}
}
public static function getList()
{
$db = DbConnect::getDb();
$lot = [];
$q = $db->query("SELECT * FROM lot");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$lot[] = new Lot($donnees);
}
}
return $lot;
 }
 public static function getListByIdEvenement($idEvenement)
 {
 $db = DbConnect::getDb();
 $lot = [];
 $q = $db->query("SELECT * FROM lot WHERE idEvenement=$idEvenement");
 while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
 if ($donnees != false) {
 $lot[] = new Lot($donnees);
 }
 }
 return $lot;
  }

}