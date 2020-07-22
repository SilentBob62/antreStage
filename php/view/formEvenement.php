<?php
if($lvl < 1){
    header("Location: index.php");
}
$mode = $_GET["m"];
if ($mode != "ajout")
{
    $id = $_GET["id"];
    $evenement= EvenementManager::getById($id);

    if($mode == "suppr"){
        header("Location: index.php?action=EvenementAction&m=suppr&id=".$id);
    }

}
echo '<div class="contenu column center">
        <div class= "formulaire blackTransparent margeTopGrand border column" >
        <form action="index.php?action=EvenementAction&m=' . $mode . '" method = "POST">
        <div class="column">
        <div class="margeLeft margeTop">
            <label for="nomEvenement">nom Evenement</label>
            <input class="margeRight" type="text" id="nomEvenement" name="nomEvenement" placeholder="Nom de l evenement"  required autofocus ';
            if ($mode != "ajout")
                    {
                        echo 'value ="' . $evenement->getNomEvenement() . '"';
                    }
        echo '> 
        </div> ';
        if ($mode != "ajout")
        {
            echo '  <input type="text" id="IdEvenement" name="IdEvenement" hidden value = "' . $evenement->getIdEvenement() . '">';
        }
echo'
                    <div class="margeLeft margeTop">
                        <label for="maxParticipant">nombre de joueur maximum</label>
                        <input class="margeRight" type="text" id="nbMaxJoueur" name="nbMaxJoueur" placeholder="nombre de Joueur maximum" autofocus ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $evenement->getNbMaxJoueur() . '"';
                        } 
                    echo'>
                    </div>
';  
echo'
                    <div class="margeLeft margeTop">
                        <label for="cout">Coût Tournois</label>
                        <input class="margeRight" type="text" id="cout" name="cout" placeholder="cout de l evenement"  autofocus ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $evenement->getCout() . '"';
                        } 
        echo'>
        </div>
';   
echo'
                    <div class="margeLeft margeTop">
                        <label for="nomJeu">nom Jeu</label>
                        <input class="margeRight" type="text" id="nomJeu" name="nomJeu" placeholder="nom du jeu" required autofocus ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $evenement->getJeu()->getNomJeu() . '" readonly';
                        } 
                    echo'>
                    </div>
';
echo'
                    <div class="margeLeft margeTop">
                        <label for="dateEvenement">date Evenement</label>
                        <input class="margeRight" type="date" required  id="dateEvenement" name="dateEvenement" ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $evenement->getDateEvenement() . '"';
                        } 
                    echo'>
                    </div>
';
echo '       <div class="bouton retour marge center">
                <button class="menuListe" type="submit">';
                    switch ($mode)
                    {
                        case "ajout":echo 'Ajouter';
                            break;
                        case "modif":echo 'Modifier';
                            break;
                    }
echo '          </button>
            </div>
        </form>
        
        <form action="index.php?action=evenementListe" method="POST">
            <div class="bouton retour marge center">
                <button class="menuListe" type="submit">Retour</button>
            </div>
        </form>
    </div>
</div>';
