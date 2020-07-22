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
                    if ($mode != "ajout")
                    {
                        echo '<input type="text" id="IdParticipant" name="IdParticipant" value="'.$participation->getIdParticipant().'" hidden>';
                    }
                    echo'<div class="margeLeft margeTop">
                        <label for="nomParticipant">nom Participant</label>
                        <input class="margeRight" type="text" id="nomParticipant" name="nomParticipant" placeholder="Nom du Participant"  required autofocus ';
                        if ($mode != "ajout")
                    {
                        echo 'value ="' . $participation->getParticipant()->getNomParticipant() . '"';
                    }
                        echo'>
                    </div>';
                    echo '<input type="text" id="IdEvenement" name="IdEvenement" hidden value = "' . $tournois . '">';
                    if ($mode != "ajout")
                    {
                        echo '  <input type="text" id="IdParticipation" name="IdParticipation" hidden value = "' . $participation->getIdParticipation() . '">';
                    }
                    echo'<div class="margeLeft margeTop">
                        <label for="prenomParticipant">prenom Participant</label>
                        <input class="margeRight" type="text" id="prenomParticipant" name="prenomParticipant" placeholder="Prenom du Participant"  required autofocus ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $participation->getParticipant()->getPrenomParticipant() . '"';
                        }
                        echo'>
                    </div>';
                    echo'<div class="margeLeft margeTop">
                        <label for="mailParticipant">mail Participant</label>
                        <input class="margeRight" type="text" id="mailParticipant" name="mailParticipant"';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $participation->getParticipant()->getMailParticipant() . '"';
                        }
                        echo'>
                    </div>';
                    echo '<div class="margeLeft margeTop">
                        <label for="telParticipant">telephone Participant</label>
                        <input class="margeRight" type="text" id="telParticipant" name="telParticipant"';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $participation->getParticipant()->getTelParticipant() . '"';
                        }
                        echo'>
                    </div>';
                    echo '<div class="margeLeft margeTop">
                        <label for="prevenu">prevenu par mail</label>
                        <input class="margeRight" type="checkbox" id="prevenu" name="prevenu"';
                        if ($mode != "ajout")
                        {

                            if($participation->getPrevenu()) echo 'checked';
                        }
                        echo'>
                    </div>';
                    echo '<div class="margeLeft margeTop">
                        <label for="Presence">Presence</label>
                        <input class="margeRight" type="checkbox" id="Presence" name="Presence"';
                        if ($mode != "ajout")
                        {
                            if($participation->getPresence()) echo 'checked';
                        }
                        echo'>
                    </div>';
                    echo '<div class="margeLeft margeTop">
                        <label for="Reglement">payé</label>
                        <input class="margeRight" type="checkbox" id="Reglement" name="Reglement"';
                        if ($mode != "ajout")
                        {
                            if($participation->getReglement()) echo 'checked';
                        }
                        echo'>
                    </div>';
                    echo '</div>
                <div class="bouton marge center">
                    <button class="menuListe" type="submit">';
                    switch ($mode)
                    {
                        case "ajout":echo 'Ajouter';
                            break;
                        case "modif":echo 'Modifier';
                            break;
                    }
                    echo'
                    </button>
                </div>
            </form>
            <form action="index.php?action=ParticipationListe&idEvenement='.$tournois.'" method="post">
                <div class="bouton marge center">
                    <button class="menuListe" type="submit">Retour</button>
                </div>
            </form>
        </div>
    </div>';