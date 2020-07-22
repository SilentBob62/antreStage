<?php
class PreferenceManager
{
public static function add(Preference $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO preference (nomPreference) VALUES (:nomPreference)");
$q->bindValue(":nomPreference", $obj->getNomPreference());
 $q->execute();
}

public static function update(Preference $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE preference SET nomPreference=:nomPreference WHERE idPreference=:idPreference");
$q->bindValue(":nomPreference", $obj->getNomPreference());
$q->bindValue(":idPreference", $obj->getIdPreference());
 $q->execute();
}

public static function delete(Preference $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM preference WHERE idPreference=" . $obj->getIdPreference());
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM preference WHERE idPreference=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Preference ($results);
 }else {
return false;
}
}
public static function getList()
{
$db = DbConnect::getDb();
$preference = [];
$q = $db->query("SELECT * FROM preference");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$preference[] = new Preference($donnees);
}
}
return $preference;
 }

}