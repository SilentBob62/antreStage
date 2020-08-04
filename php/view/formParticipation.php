<?php
if($lvl < 1){
    header("Location: index.php");
}
 if ($_GET['m']=="ajout" ) $tournois = $_POST["numEvenement"];
 else $tournois=$_GET['idTournois'];
//  var_dump($tournois);

$mode = $_GET["m"];
if ($mode != "ajout")                   // si le mode est modif ou suppr
{
    $id = $_GET["id"];                  // on recupere l'id de la participation
    $participation= ParticipationManager::getById($id);

    if($mode == "suppr"){               
        header("Location: index.php?action=EvenementAction&m=suppr&id=".$id);
    }

}

echo '<div class="contenu column center">
        <div class="connexion blackTransparent margeTopGrand border column">
            <form action="index.php?action=ParticipationAction&m=' . $mode . '" method = "POST">
                <div class="column">';
                    echo'<div class="margeLeft margeTop">
                        <label for="nomParticipant">nom Participant</label>
                        <input class="margeRight input" type="text" id="nomParticipant" name="nomParticipant" placeholder="Nom du Participant" required autofocus >
                    </div>';
                    echo '<input type="text" id="IdEvenement" name="IdEvenement" hidden value = "' . $tournois . '">';
                    echo'<div class="margeLeft margeTop">
                        <label for="prenomParticipant">prenom Participant</label>
                        <input class="margeRight input" type="text" id="prenomParticipant" name="prenomParticipant" placeholder="Prenom du Participant"  required autofocus>
                    </div>';
                    echo '<div class="margeLeft margeTop">
                        <label for="prevenu">prevenu par mail</label>
                        <input class="margeRight" type="checkbox" id="prevenu" name="prevenu">
                    </div>';
                    echo '<div class="margeLeft margeTop">
                        <label for="Presence">Presence</label>
                        <input class="margeRight" type="checkbox" id="Presence" name="Presence">
                    </div>';
                    echo '<div class="margeLeft margeTop">
                        <label for="Reglement">payé</label>
                        <input class="margeRight" type="checkbox" id="Reglement" name="Reglement">
                    </div>';
                    echo '</div>
                <div class="bouton marge center">
                    <button class="menuListe" type="submit">Ajouter</button>
                </div>
            </form>
            <form action="index.php?action=ParticipationListe&idEvenement='.$tournois.'" method="post">
                <div class="bouton marge center">
                    <button class="menuListe" type="submit">Retour</button>
                </div>
            </form>
        </div>
    </div>';