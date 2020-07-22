<?php
class UtilisateurManager
{
public static function add(Utilisateur $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO utilisateur (pseudo,mdp,role) VALUES (:pseudo,:mdp,:role)");
$q->bindValue(":pseudo", $obj->getPseudo());
$q->bindValue(":mdp", $obj->getMdp());
$q->bindValue(":role", $obj->getRole());
 $q->execute();
}

public static function update(Utilisateur $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE utilisateur SET pseudo=:pseudo, mdp=:mdp, role=:role WHERE idUtilisateur=:idUtilisateur");
$q->bindValue(":pseudo", $obj->getPseudo());
$q->bindValue(":mdp", $obj->getMdp());
$q->bindValue(":role", $obj->getRole());
$q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
 $q->execute();
}

public static function delete(Utilisateur $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM utilisateur WHERE idUtilisateur=" . $obj->getIdUtilisateur());
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM utilisateur WHERE idUtilisateur=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Utilisateur ($results);
 }else {
return false;
}
}

static public function getByPseudo($pseudo) {
    $db = DbConnect::getDb (); 
    $q = $db->prepare ( 'SELECT pseudo, mdp, idutilisateur, role FROM utilisateur WHERE pseudo = :pseudo' );
    
    
    $q->bindValue ( ':pseudo', $pseudo );
    $q->execute ();
    $donnees = $q->fetch ( PDO::FETCH_ASSOC );
    $q->CloseCursor ();
    if ($donnees == false) { 
        return new utilisateur ();
    } else {
        return new utilisateur ( $donnees );
    }
}

public static function getList()
{
$db = DbConnect::getDb();
$utilisateur = [];
$q = $db->query("SELECT * FROM utilisateur");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$utilisateur[] = new Utilisateur($donnees);
}
}
return $utilisateur;
 }

}