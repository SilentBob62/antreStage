<?php
class GagnantManager
{
public static function add(Gagnant $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO gagnant (nomGagnant,prenomGagnant,idEvenement) VALUES (:nomGagnant,:prenomGagnant,:idEvenement)");
$q->bindValue(":nomGagnant", $obj->getNomGagnant());
$q->bindValue(":prenomGagnant", $obj->getPrenomGagnant());
$q->bindValue(":idEvenement", $obj->getIdEvenement());
 $q->execute();
}

public static function update(Gagnant $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE gagnant SET nomGagnant=:nomGagnant, prenomGagnant=:prenomGagnant, idEvenement=:idEvenement  WHERE idGagnant=:idGagnant");
$q->bindValue(":nomGagnant", $obj->getNomGagnant());
$q->bindValue(":prenomGagnant", $obj->getPrenomGagnant());
$q->bindValue(":idEvenement", $obj->getIdEvenement());
$q->bindValue(":idGagnant", $obj->getIdGagnant());
 $q->execute();
}

public static function delete(Gagnant $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM gagnant WHERE idGagnant=" . $obj->getIdGagnant());
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM gagnant WHERE idGagnant=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Gagnant ($results);
 }else {
return false;
}
}
public static function getList()
{
$db = DbConnect::getDb();
$gagnant = [];
$q = $db->query("SELECT * FROM gagnant");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$gagnant[] = new Gagnant($donnees);
}
}
return $gagnant;
 }

}