<?php
class JeuManager
{
public static function add(Jeu $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO jeu (nomJeu) VALUES (:nomJeu)");
$q->bindValue(":nomJeu", $obj->getNomJeu());
 $q->execute();
}

public static function update(Jeu $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE jeu SET nomJeu=:nomJeu WHERE idJeu=:idJeu");
$q->bindValue(":nomJeu", $obj->getNomJeu());
$q->bindValue(":idJeu", $obj->getIdJeu());
 $q->execute();
}

public static function delete(Jeu $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM jeu WHERE idJeu=" . $obj->getIdJeu());
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM jeu WHERE idJeu=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Jeu ($results);
 }else {
return false;
}
}

/** recherche si le jeu existe deja */
static public function getByNomJeu($nomjeu) {
    $db = DbConnect::getDb (); 
    $q = $db->prepare ( 'SELECT * FROM jeu WHERE nomJeu = :nomJeu' );
    
    $q->bindValue ( ':nomJeu', $nomjeu );
    $q->execute ();
    $donnees = $q->fetch ( PDO::FETCH_ASSOC );
    $q->CloseCursor ();
    if ($donnees == false) { 
        return new Jeu ();
    } else {
        return new jeu ( $donnees );
    }
}

public static function getList()
{
$db = DbConnect::getDb();
$jeu = [];
$q = $db->query("SELECT * FROM jeu");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$jeu[] = new Jeu($donnees);
}
}
return $jeu;
 }

}