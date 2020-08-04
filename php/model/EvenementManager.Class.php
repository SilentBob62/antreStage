<?php
class EvenementManager
{
public static function add(Evenement $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO evenement (nomEvenement,cout,nbMaxJoueur,dateEvenement,idJeu,informationsupplementaire) VALUES (:nomEvenement,:cout,:nbMaxJoueur,:dateEvenement,:idJeu,:informationsupplementaire)");
$q->bindValue(":nomEvenement", $obj->getNomEvenement());
$q->bindValue(":cout", $obj->getCout());
$q->bindValue(":nbMaxJoueur", $obj->getNbMaxJoueur());
$q->bindValue(":dateEvenement", $obj->getDateEvenement());
$q->bindValue(":idJeu", $obj->getIdJeu());
$q->bindValue(":informationsupplementaire", $obj->getInformationsupplementaire());
 $q->execute();
}

public static function update(Evenement $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE evenement SET nomEvenement=:nomEvenement, cout=:cout, nbMaxJoueur=:nbMaxJoueur, dateEvenement=:dateEvenement, idJeu=:idJeu , informationsupplementaire=:informationsupplementaire WHERE idEvenement=:idEvenement");
$q->bindValue(":nomEvenement", $obj->getNomEvenement());
$q->bindValue(":cout", $obj->getCout());
$q->bindValue(":nbMaxJoueur", $obj->getNbMaxJoueur());
$q->bindValue(":dateEvenement", $obj->getDateEvenement());
$q->bindValue(":idJeu", $obj->getIdJeu());
$q->bindValue(":informationsupplementaire", $obj->getInformationsupplementaire());
$q->bindValue(":idEvenement", $obj->getIdEvenement());
 $q->execute();
}

public static function delete(Evenement $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM evenement WHERE idEvenement=" . $obj->getIdEvenement());
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM evenement WHERE idEvenement=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Evenement ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$evenement = [];
$q = $db->query("SELECT * FROM evenement");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$evenement[] = new Evenement($donnees);
}
}
return $evenement;
 }

 public static function getListByDate()
 {
 $db = DbConnect::getDb();
 $evenement = [];
 $q = $db->query("SELECT * FROM evenement ORDER BY dateEvenement");
 while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
 if ($donnees != false) {
 $evenement[] = new Evenement($donnees);
 }
 }
 return $evenement;
  }

  public static function getListEvenementAJour($date)
  {
  $db = DbConnect::getDb();
  $evenement = [];
  $q = $db->query("SELECT * FROM evenement WHERE dateEvenement>$date ORDER BY dateEvenement");
  while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
  if ($donnees != false) {
  $evenement[] = new Evenement($donnees);
  }
  }
  return $evenement;
   }

}