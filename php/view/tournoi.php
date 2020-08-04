<?php
if ($lvl < 1) {
    header("Location: index.php");
}

if (isset($_POST['poolA']))
    $nbPoolA = $_POST['poolA'];
else
    $nbPoolA = $_GET['nbPoolA'];

if (isset($_POST['poolB']))
    $nbPoolB = $_POST['poolB'];
else
    $nbPoolB = $_GET['nbPoolB'];

if (isset($_POST['nbPool']))
    $nbPool = $_POST['nbPool'];
else
    $nbPool = $_GET['nbPool'];

if (isset($_POST["evenement"]))
    $idEvenement = $_POST["evenement"];
else
    $idEvenement = $_GET["idEvenement"];



$evenement = EvenementManager::getById($idEvenement);

$joueurs = JoueurManager::getByIdEvenement($idEvenement);


if (empty($joueurs)) {
    $participations = ParticipationManager::getListRandom($idEvenement);
    echo '<form action="index.php?action=joueurAction&m=ajout&idEvenement=' . $idEvenement . '&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool . '" method="POST">';
    $i = 0;
    foreach ($participations as $participation) {
        echo '   <input type="text" name="joueur' . $i . '" id="joueur' . $i . '" value="' . $participation->getIdParticipant() . '" hidden>';
        $i++;
    }
    echo '  <div class="bouton retour marge center">
                <button class="menuListe" type="submit">Lancer le tournoi</button>';
    echo '</form>';
    echo '  <form action="index.php?action=menuTournois" method="POST">
                    <button class="menuListe" type="submit">Retour</button>
                </div>
            </form>';
}
else{
    echo '<form action="index.php?action=joueurAction&m=suppr&idEvenement=' . $idEvenement . '&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool . '" method="POST">';
    echo '  <div class="bouton retour marge center">
                <button class="menuListe" type="submit">Réinitialiser le tournoi</button>';

    echo '</form>';
    echo '  <form action="index.php?action=menuTournois" method="POST">
                    <button class="menuListe" type="submit">Retour</button>
                </div>
            </form>';
}

echo '<div class="center"><div class="titreTournois marge center decoTitre">' . $evenement->getNomEvenement() . '</div></div>';
if(!empty($joueurs))
{
?>
<div class="contenu column center">
    <div class="Pool">
        <div class="poolA column center">
            <div id="poolA" <?php if ($nbPoolB) echo 'class="nomPool marge center decoPool"' ?> nombre=<?php echo $nbPoolA ?>><?php if ($nbPoolB) echo 'Pool A' ?></div>
            <div class="tabA column blackTransparent ecritureBlanche">
                <div class="enteteTab red">
                    <div class="casePetit borderSimple center">tour</div>
                    <div class=<?php if ($nbPool == 2) echo '"case center column borderSimple';
                                else echo '"caseGrand column borderSimple';
                                echo ' borderSimple margeleft center"'; ?>>rencontres</div>
                </div>
                
                <div class="form column">
                    <?php

                    switch ($nbPoolA) {
/******************************************************************************************************************************************************************************************case 3 */
                        case "3":
                            echo '
                            <div class="infoTabA bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourA">1</div>
                                <div class="';
                                if ($nbPool== 2) echo 'case column borderSimple';
                                else echo 'caseGrand column borderSimple';
                                echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                            <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                                <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>
                                                <input class="numJoueurA numJoueurA1 score0" joueur="' . $joueurs[0]->getIdParticipant() . '" id="1score' . $joueurs[0]->getIdParticipant() . '" name="score0" type="number" prenomJoueur="' . $joueurs[0]->getParticipant()->getPrenomParticipant() . '" nomJoueur="' . $joueurs[0]->getParticipant()->getNomParticipant() . '" value="'.$joueurs[0]->getScore0().'">
                                            </form>
                                            <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                                <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                                <input class="numJoueurA numJoueurA1 score0"  joueur="' . $joueurs[1]->getIdParticipant() . '" id="1score' . $joueurs[1]->getIdParticipant() . '" name="score0" type="number" prenomJoueur="' . $joueurs[1]->getParticipant()->getPrenomParticipant() . '" nomJoueur="' . $joueurs[1]->getParticipant()->getNomParticipant() . '" value="'.$joueurs[1]->getScore0().'">
                                            </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                            <input class="numJoueurA numJoueurA1 score0"  joueur="' . $joueurs[2]->getIdParticipant() . '" id="1score' . $joueurs[2]->getIdParticipant() . '" name="score0" type="number" prenomJoueur="' . $joueurs[2]->getParticipant()->getPrenomParticipant() . '" nomJoueur="' . $joueurs[2]->getParticipant()->getNomParticipant() . '" value="'.$joueurs[2]->getScore0().'">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabA bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourA">2</div>
                                <div class="';
                                if ($nbPool == 2) echo 'case column borderSimple';
                                else echo 'caseGrand column borderSimple';
                                echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>
                                            <input class="numJoueurA numJoueurA2 score1"  joueur="'.$joueurs[0]->getIdParticipant().'" id="2score'.$joueurs[0]->getIdParticipant().'" name="score1" type="number"  value="'.$joueurs[0]->getScore1().'">
                                        </form>    
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                            <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[2]->getIdParticipant().'" id="2score'.$joueurs[2]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[2]->getScore1().'">
                                        </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                            <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[1]->getIdParticipant().'" id="2score'.$joueurs[1]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[1]->getScore1().'">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabA bordureRouge margeTop">
                                <div id="tourAMax" class="casePetit borderSimple center fondRouge tourA">3</div>
                                <div class="';
                                if ($nbPool == 2) echo 'case column borderSimple';
                                else echo 'caseGrand column borderSimple';
                                echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                            <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[1]->getIdParticipant().'" id="3score'.$joueurs[1]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[1]->getScore2().'">
                                        </form>
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                            <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[2]->getIdParticipant().'" id="3score'.$joueurs[2]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[2]->getScore2().'">
                                        </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>
                                            <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[0]->getIdParticipant().'" id="3score'.$joueurs[0]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[0]->getScore2().'">
                                        </form>       
                                    </div>
                                </div>
                            </div>';
                            break;
/******************************************************************************************************************************************************************************************case 4 */
                    case "4":
                        echo '<div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">1</div>
                            <div class="';
                        if ($nbPool== 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[0]->getIdParticipant().'" id="1score'.$joueurs[0]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[0]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[0]->getParticipant()->getNomParticipant().'" value="'.$joueurs[0]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[1]->getIdParticipant().'" id="1score'.$joueurs[1]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[1]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[1]->getParticipant()->getNomParticipant().'" value="'.$joueurs[1]->getScore0().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[2]->getIdParticipant().'" id="1score'.$joueurs[2]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[2]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[2]->getParticipant()->getNomParticipant().'" value="'.$joueurs[2]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[3]->getIdParticipant().'" id="1score'.$joueurs[3]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[3]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[3]->getParticipant()->getNomParticipant().'" value="'.$joueurs[3]->getScore0().'">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">2</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[0]->getIdParticipant().'" id="2score'.$joueurs[0]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[0]->getScore1().'">
                                    </form>    
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[2]->getIdParticipant().'" id="2score'.$joueurs[2]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[2]->getScore1().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[1]->getIdParticipant().'" id="2score'.$joueurs[1]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[1]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[3]->getIdParticipant().'" id="2score'.$joueurs[3]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[3]->getScore1().'">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div id="tourAMax" class="casePetit borderSimple center fondRouge tourA">3</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[0]->getIdParticipant().'" id="3score'.$joueurs[0]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[0]->getScore2().'">
                                    </form>    
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[3]->getIdParticipant().'" id="3score'.$joueurs[3]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[3]->getScore2().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[1]->getIdParticipant().'" id="3score'.$joueurs[1]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[1]->getScore2().'">
                                    </form> 
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[2]->getIdParticipant().'" id="3score'.$joueurs[2]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[2]->getScore2().'">
                                    </form>
                                </div>
                            </div>
                        </div>';
                        break;
/******************************************************************************************************************************************************************************************case 5 */
                    case "5":
                        echo '<div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">1</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[0]->getIdParticipant().'" id="1score'.$joueurs[0]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[0]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[0]->getParticipant()->getNomParticipant().'" value="'.$joueurs[0]->getScore0().'">
                                    </form>    
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>    
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[1]->getIdParticipant().'" id="1score'.$joueurs[1]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[1]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[1]->getParticipant()->getNomParticipant().'" value="'.$joueurs[1]->getScore0().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>  
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[2]->getIdParticipant().'" id="1score'.$joueurs[2]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[2]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[2]->getParticipant()->getNomParticipant().'" value="'.$joueurs[2]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>  
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[3]->getIdParticipant().'" id="1score'.$joueurs[3]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[3]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[3]->getParticipant()->getNomParticipant().'" value="'.$joueurs[3]->getScore0().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden>  
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[4]->getIdParticipant().'" id="1score'.$joueurs[4]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[4]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[4]->getParticipant()->getNomParticipant().'" value="'.$joueurs[4]->getScore0().'">
                                    </form>        
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">2</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[0]->getIdParticipant().'" id="2score'.$joueurs[0]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[0]->getScore1().'">
                                     </form>
                                     <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[2]->getIdParticipant().'" id="2score'.$joueurs[2]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[2]->getScore1().'">
                                     </form>
                                 </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[1]->getIdParticipant().'" id="2score'.$joueurs[1]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[1]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[4]->getIdParticipant().'" id="2score'.$joueurs[4]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[4]->getScore1().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[3]->getIdParticipant().'" id="2score'.$joueurs[3]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[3]->getScore1().'">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">3</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[0]->getIdParticipant().'" id="3score'.$joueurs[0]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[0]->getScore2().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[4]->getIdParticipant().'" id="3score'.$joueurs[4]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[4]->getScore2().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[1]->getIdParticipant().'" id="3score'.$joueurs[1]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[1]->getScore2().'">  
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>    
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[3]->getIdParticipant().'" id="3score'.$joueurs[3]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[3]->getScore2().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[2]->getIdParticipant().'" id="3score'.$joueurs[2]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[2]->getScore2().'">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">4</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[0]->getIdParticipant().'" id="4score'.$joueurs[0]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[0]->getScore3().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>     
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[3]->getIdParticipant().'" id="4score'.$joueurs[3]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[3]->getScore3().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[2]->getIdParticipant().'" id="4score'.$joueurs[2]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[2]->getScore3().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[4]->getIdParticipant().'" id="4score'.$joueurs[4]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[4]->getScore3().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[1]->getIdParticipant().'" id="4score'.$joueurs[1]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[1]->getScore3().'">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div id="tourAMax" class="casePetit borderSimple center fondRouge tourA">5</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[1]->getIdParticipant().'" id="5score'.$joueurs[1]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[1]->getScore4().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[2]->getIdParticipant().'" id="5score'.$joueurs[2]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[2]->getScore4().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[3]->getIdParticipant().'" id="5score'.$joueurs[3]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[3]->getScore4().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[4]->getIdParticipant().'" id="5score'.$joueurs[4]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[4]->getScore4().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[0]->getIdParticipant().'" id="5score'.$joueurs[0]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[0]->getScore4().'">
                                    </form>
                                </div>
                            </div>
                        </div>';
                        break;
/******************************************************************************************************************************************************************************************case 6 */
                    case "6":
                        echo '<div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">1</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[0]->getIdParticipant().'" id="1score'.$joueurs[0]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[0]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[0]->getParticipant()->getNomParticipant().'" value="'.$joueurs[0]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[1]->getIdParticipant().'" id="1score'.$joueurs[1]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[1]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[1]->getParticipant()->getNomParticipant().'" value="'.$joueurs[1]->getScore0().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[2]->getIdParticipant().'" id="1score'.$joueurs[2]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[2]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[2]->getParticipant()->getNomParticipant().'" value="'.$joueurs[2]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[3]->getIdParticipant().'" id="1score'.$joueurs[3]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[3]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[3]->getParticipant()->getNomParticipant().'" value="'.$joueurs[3]->getScore0().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[4]->getIdParticipant().'" id="1score'.$joueurs[4]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[4]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[4]->getParticipant()->getNomParticipant().'" value="'.$joueurs[4]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[5]->getIdParticipant().'" id="1score'.$joueurs[5]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[5]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[5]->getParticipant()->getNomParticipant().'" value="'.$joueurs[5]->getScore0().'">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">2</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[0]->getIdParticipant().'" id="2score'.$joueurs[0]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[0]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[2]->getIdParticipant().'" id="2score'.$joueurs[2]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[2]->getScore1().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[1]->getIdParticipant().'" id="2score'.$joueurs[1]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[1]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[4]->getIdParticipant().'" id="2score'.$joueurs[4]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[4]->getScore1().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>  
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[3]->getIdParticipant().'" id="2score'.$joueurs[3]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[3]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[5]->getIdParticipant().'" id="2score'.$joueurs[5]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[5]->getScore1().'">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">3</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[0]->getIdParticipant().'" id="3score'.$joueurs[0]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[0]->getScore2().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[4]->getIdParticipant().'" id="3score'.$joueurs[4]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[4]->getScore2().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>   
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[1]->getIdParticipant().'" id="3score'.$joueurs[1]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[1]->getScore2().'">
                                    </form>   
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[3]->getIdParticipant().'" id="3score'.$joueurs[3]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[3]->getScore2().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>   
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[2]->getIdParticipant().'" id="3score'.$joueurs[2]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[2]->getScore2().'">
                                    </form>    
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[5]->getIdParticipant().'" id="3score'.$joueurs[5]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[5]->getScore2().'">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">4</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[0]->getIdParticipant().'" id="4score'.$joueurs[0]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[0]->getScore3().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>   
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[3]->getIdParticipant().'" id="4score'.$joueurs[3]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[3]->getScore3().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[2]->getIdParticipant().'" id="4score'.$joueurs[2]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[2]->getScore3().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[4]->getIdParticipant().'" id="4score'.$joueurs[4]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[4]->getScore3().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>     
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[1]->getIdParticipant().'" id="4score'.$joueurs[1]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[1]->getScore3().'">
                                    </form>   
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[5]->getIdParticipant().'" id="4score'.$joueurs[5]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[5]->getScore3().'">
                                    </form>
                                </div>
                            </div>
                        </div><div class="infoTabA bordureRouge margeTop">
                        <div id="tourAMax" class="casePetit borderSimple center fondRouge tourA">5</div>
                        <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>    
                                    <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[1]->getIdParticipant().'" id="5score'.$joueurs[1]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[1]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden> 
                                    <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[2]->getIdParticipant().'" id="5score'.$joueurs[2]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[2]->getScore4().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden> 
                                    <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[3]->getIdParticipant().'" id="5score'.$joueurs[3]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[3]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden> 
                                    <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[4]->getIdParticipant().'" id="5score'.$joueurs[4]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[4]->getScore4().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden> 
                                    <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[0]->getIdParticipant().'" id="5score'.$joueurs[0]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[0]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden> 
                                    <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[5]->getIdParticipant().'" id="5score'.$joueurs[5]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[5]->getScore4().'">
                                </form>
                            </div>
                        </div>
                    </div>';
                        break;
/******************************************************************************************************************************************************************************************case 7 */
                    case "7":
                        echo '<div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">1</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>   
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[0]->getIdParticipant().'" id="1score'.$joueurs[0]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[0]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[0]->getParticipant()->getNomParticipant().'" value="'.$joueurs[0]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[1]->getIdParticipant().'" id="1score'.$joueurs[1]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[1]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[1]->getParticipant()->getNomParticipant().'" value="'.$joueurs[1]->getScore0().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[2]->getIdParticipant().'" id="1score'.$joueurs[2]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[2]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[2]->getParticipant()->getNomParticipant().'" value="'.$joueurs[2]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[3]->getIdParticipant().'" id="1score'.$joueurs[3]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[3]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[3]->getParticipant()->getNomParticipant().'" value="'.$joueurs[3]->getScore0().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[4]->getIdParticipant().'" id="1score'.$joueurs[4]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[4]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[4]->getParticipant()->getNomParticipant().'" value="'.$joueurs[4]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[5]->getIdParticipant().'" id="1score'.$joueurs[5]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[5]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[5]->getParticipant()->getNomParticipant().'" value="'.$joueurs[5]->getScore0().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[6]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[6]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[6]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[6]->getIdParticipant().'" id="1score'.$joueurs[6]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[6]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[6]->getParticipant()->getNomParticipant().'" value="'.$joueurs[6]->getScore0().'">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">2</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[0]->getIdParticipant().'" id="2score'.$joueurs[0]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[0]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[2]->getIdParticipant().'" id="2score'.$joueurs[2]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[2]->getScore1().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[1]->getIdParticipant().'" id="2score'.$joueurs[1]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[1]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[4]->getIdParticipant().'" id="2score'.$joueurs[4]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[4]->getScore1().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[6]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[6]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[3]->getIdParticipant().'" id="2score'.$joueurs[3]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[3]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[6]->getIdJoueur().'" hidden> 
                                    <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[6]->getIdParticipant().'" id="2score'.$joueurs[6]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[6]->getScore1().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[5]->getIdParticipant().'" id="2score'.$joueurs[5]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[5]->getScore1().'">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">3</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>    
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[0]->getIdParticipant().'" id="3score'.$joueurs[0]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[0]->getScore2().'">
                                    </form>  
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[3]->getIdParticipant().'" id="3score'.$joueurs[3]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[3]->getScore2().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[1]->getIdParticipant().'" id="3score'.$joueurs[1]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[1]->getScore2().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[2]->getIdParticipant().'" id="3score'.$joueurs[2]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[2]->getScore2().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[6]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[6]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[5]->getIdParticipant().'" id="3score'.$joueurs[5]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[5]->getScore2().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[6]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[6]->getIdParticipant().'" id="3score'.$joueurs[6]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[6]->getScore2().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[4]->getIdParticipant().'" id="3score'.$joueurs[4]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[4]->getScore2().'">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">4</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>     
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[0]->getIdParticipant().'" id="4score'.$joueurs[0]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[0]->getScore3().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[4]->getIdParticipant().'" id="4score'.$joueurs[4]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[4]->getScore3().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[6]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[6]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[2]->getIdParticipant().'" id="4score'.$joueurs[2]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[2]->getScore3().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[6]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[6]->getIdParticipant().'" id="4score'.$joueurs[6]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[6]->getScore3().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[1]->getIdParticipant().'" id="4score'.$joueurs[1]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[1]->getScore3().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[5]->getIdParticipant().'" id="4score'.$joueurs[5]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[5]->getScore3().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[3]->getIdParticipant().'" id="4score'.$joueurs[3]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[3]->getScore3().'">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">5</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>    
                                        <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[0]->getIdParticipant().'" id="5score'.$joueurs[0]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[0]->getScore4().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[5]->getIdParticipant().'" id="5score'.$joueurs[5]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[5]->getScore4().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[1]->getIdParticipant().'" id="5score'.$joueurs[1]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[1]->getScore4().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[3]->getIdParticipant().'" id="5score'.$joueurs[3]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[3]->getScore4().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[6]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[6]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[4]->getIdParticipant().'" id="5score'.$joueurs[4]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[4]->getScore4().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[6]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[6]->getIdParticipant().'" id="5score'.$joueurs[6]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[6]->getScore4().'">
                                    </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                        <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden> 
                                        <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[2]->getIdParticipant().'" id="5score'.$joueurs[2]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[2]->getScore4().'">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">6</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[6]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[6]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>    
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[0]->getIdParticipant().'" id="6score'.$joueurs[0]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[0]->getScore5().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[6]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[6]->getIdParticipant().'" id="6score'.$joueurs[6]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[6]->getScore5().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[2]->getIdParticipant().'" id="6score'.$joueurs[2]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[2]->getScore5().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[4]->getIdParticipant().'" id="6score'.$joueurs[4]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[4]->getScore5().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[3]->getIdParticipant().'" id="6score'.$joueurs[3]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[3]->getScore5().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[5]->getIdParticipant().'" id="6score'.$joueurs[5]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[5]->getScore5().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[1]->getIdParticipant().'" id="6score'.$joueurs[1]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[1]->getScore5().'">
                                </form>
                            </div>
                            </div>
                            </div>
                            <div class="infoTabA bordureRouge margeTop">
                            <div id="tourAMax" class="casePetit borderSimple center fondRouge tourA">7</div>
                            <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[6]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[6]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[1]->getIdParticipant().'" id="7score'.$joueurs[1]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[1]->getScore6().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[6]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[6]->getIdParticipant().'" id="7score'.$joueurs[6]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[6]->getScore6().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[2]->getIdParticipant().'" id="7score'.$joueurs[2]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[2]->getScore6().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[5]->getIdParticipant().'" id="7score'.$joueurs[5]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[5]->getScore6().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[3]->getIdParticipant().'" id="7score'.$joueurs[3]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[3]->getScore6().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[4]->getIdParticipant().'" id="7score'.$joueurs[4]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[4]->getScore6().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[0]->getIdParticipant().'" id="7score'.$joueurs[0]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[0]->getScore6().'">
                                </form>
                            </div>
                        </div>
                    </div>';
                        break;
/******************************************************************************************************************************************************************************************case 8 */
                    case "8":
                        echo '<div class="infoTabA bordureRouge margeTop">
                        <div class="casePetit borderSimple center fondRouge tourA">1</div>
                        <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>   
                                    <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[0]->getIdParticipant().'" id="1score'.$joueurs[0]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[0]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[0]->getParticipant()->getNomParticipant().'" value="'.$joueurs[0]->getScore0().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[1]->getIdParticipant().'" id="1score'.$joueurs[1]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[1]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[1]->getParticipant()->getNomParticipant().'" value="'.$joueurs[1]->getScore0().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[2]->getIdParticipant().'" id="1score'.$joueurs[2]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[2]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[2]->getParticipant()->getNomParticipant().'" value="'.$joueurs[2]->getScore0().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[3]->getIdParticipant().'" id="1score'.$joueurs[3]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[3]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[3]->getParticipant()->getNomParticipant().'" value="'.$joueurs[3]->getScore0().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[4]->getIdParticipant().'" id="1score'.$joueurs[4]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[4]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[4]->getParticipant()->getNomParticipant().'" value="'.$joueurs[4]->getScore0().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[5]->getIdParticipant().'" id="1score'.$joueurs[5]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[5]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[5]->getParticipant()->getNomParticipant().'" value="'.$joueurs[5]->getScore0().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[6]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[6]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[7]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[7]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[6]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[6]->getIdParticipant().'" id="1score'.$joueurs[6]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[6]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[6]->getParticipant()->getNomParticipant().'" value="'.$joueurs[6]->getScore0().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[7]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA1 score0" joueur="'.$joueurs[7]->getIdParticipant().'" id="1score'.$joueurs[7]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[7]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[7]->getParticipant()->getNomParticipant().'" value="'.$joueurs[7]->getScore0().'">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="infoTabA bordureRouge margeTop">
                        <div class="casePetit borderSimple center fondRouge tourA">2</div>
                        <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[0]->getIdParticipant().'" id="2score'.$joueurs[0]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[0]->getScore1().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[2]->getIdParticipant().'" id="2score'.$joueurs[2]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[2]->getScore1().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[1]->getIdParticipant().'" id="2score'.$joueurs[1]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[1]->getScore1().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden>
                                <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[4]->getIdParticipant().'" id="2score'.$joueurs[4]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[4]->getScore1().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[6]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[6]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[3]->getIdParticipant().'" id="2score'.$joueurs[3]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[3]->getScore1().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[6]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[6]->getIdParticipant().'" id="2score'.$joueurs[6]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[6]->getScore1().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[7]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[7]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[5]->getIdParticipant().'" id="2score'.$joueurs[5]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[5]->getScore1().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[7]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA2 score1" joueur="'.$joueurs[7]->getIdParticipant().'" id="2score'.$joueurs[7]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[7]->getScore1().'">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="infoTabA bordureRouge margeTop">
                        <div class="casePetit borderSimple center fondRouge tourA">3</div>
                        <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[0]->getIdParticipant().'" id="3score'.$joueurs[0]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[0]->getScore2().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[3]->getIdParticipant().'" id="3score'.$joueurs[3]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[3]->getScore2().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[1]->getIdParticipant().'" id="3score'.$joueurs[1]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[1]->getScore2().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[2]->getIdParticipant().'" id="3score'.$joueurs[2]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[2]->getScore2().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[6]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[6]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[5]->getIdParticipant().'" id="3score'.$joueurs[5]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[5]->getScore2().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[6]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[6]->getIdParticipant().'" id="3score'.$joueurs[6]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[6]->getScore2().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[7]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[7]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[4]->getIdParticipant().'" id="3score'.$joueurs[4]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[4]->getScore2().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[7]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA3 score2" joueur="'.$joueurs[7]->getIdParticipant().'" id="3score'.$joueurs[7]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[7]->getScore2().'">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="infoTabA bordureRouge margeTop">
                        <div class="casePetit borderSimple center fondRouge tourA">4</div>
                        <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[0]->getIdParticipant().'" id="4score'.$joueurs[0]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[0]->getScore3().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[4]->getIdParticipant().'" id="4score'.$joueurs[4]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[4]->getScore3().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[6]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[6]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[2]->getIdParticipant().'" id="4score'.$joueurs[2]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[2]->getScore3().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[6]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[6]->getIdParticipant().'" id="4score'.$joueurs[6]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[6]->getScore3().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[1]->getIdParticipant().'" id="4score'.$joueurs[1]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[1]->getScore3().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[5]->getIdParticipant().'" id="4score'.$joueurs[5]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[5]->getScore3().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[7]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[7]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[3]->getIdParticipant().'" id="4score'.$joueurs[3]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[3]->getScore3().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[7]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA4 score3" joueur="'.$joueurs[7]->getIdParticipant().'" id="4score'.$joueurs[7]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[7]->getScore3().'">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="infoTabA bordureRouge margeTop">
                        <div class="casePetit borderSimple center fondRouge tourA">5</div>
                        <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[0]->getIdParticipant().'" id="5score'.$joueurs[0]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[0]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[5]->getIdParticipant().'" id="5score'.$joueurs[5]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[5]->getScore4().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[1]->getIdParticipant().'" id="5score'.$joueurs[1]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[1]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[3]->getIdParticipant().'" id="5score'.$joueurs[3]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[3]->getScore4().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[6]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[6]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[4]->getIdParticipant().'" id="5score'.$joueurs[4]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[4]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[6]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[6]->getIdParticipant().'" id="5score'.$joueurs[6]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[6]->getScore4().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[7]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[7]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[2]->getIdParticipant().'" id="5score'.$joueurs[2]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[2]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[7]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA5 score4" joueur="'.$joueurs[7]->getIdParticipant().'" id="5score'.$joueurs[7]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[7]->getScore4().'">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="infoTabA bordureRouge margeTop">
                        <div class="casePetit borderSimple center fondRouge tourA">6</div>
                        <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[6]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[6]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[0]->getIdParticipant().'" id="6score'.$joueurs[0]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[0]->getScore5().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[6]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[6]->getIdParticipant().'" id="6score'.$joueurs[6]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[6]->getScore5().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[2]->getIdParticipant().'" id="6score'.$joueurs[2]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[2]->getScore5().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[4]->getIdParticipant().'" id="6score'.$joueurs[4]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[4]->getScore5().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[3]->getIdParticipant().'" id="6score'.$joueurs[3]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[3]->getScore5().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[5]->getIdParticipant().'" id="6score'.$joueurs[5]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[5]->getScore5().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[7]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[7]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[1]->getIdParticipant().'" id="6score'.$joueurs[1]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[1]->getScore5().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[7]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA6 score5" joueur="'.$joueurs[7]->getIdParticipant().'" id="6score'.$joueurs[7]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[7]->getScore5().'">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="infoTabA bordureRouge margeTop">
                        <div id="tourAMax" class="casePetit borderSimple center fondRouge tourA">7</div>
                        <div class="';
                        if ($nbPool == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $joueurs[1]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[6]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[6]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[1]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[1]->getIdParticipant().'" id="7score'.$joueurs[1]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[1]->getScore6().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[6]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[6]->getIdParticipant().'" id="7score'.$joueurs[6]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[6]->getScore6().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[2]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[5]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[5]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[2]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[2]->getIdParticipant().'" id="7score'.$joueurs[2]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[2]->getScore6().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[5]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[5]->getIdParticipant().'" id="7score'.$joueurs[5]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[5]->getScore6().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[3]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[4]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[4]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[3]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[3]->getIdParticipant().'" id="7score'.$joueurs[3]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[3]->getScore6().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[4]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[4]->getIdParticipant().'" id="7score'.$joueurs[4]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[4]->getScore6().'">
                                </form>
                            </div>
                            <div class="ligne center"><div class="joueur">' . $joueurs[0]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[7]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[7]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[0]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[0]->getIdParticipant().'" id="7score'.$joueurs[0]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[0]->getScore6().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[7]->getIdJoueur().'" hidden>
                                    <input class="numJoueurA numJoueurA7 score6" joueur="'.$joueurs[7]->getIdParticipant().'" id="7score'.$joueurs[7]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[7]->getScore6().'">
                                </form>
                            </div>
                        </div>
                    </div>';
                        break;
                }
                ?>

                </div>
            </div>
        </div>
        <?php
/**********************************************************************************************************************************************************************************************************************************
* ************************************************************************************ poolB *******************************************************************************************************************************
* *******************************************************************************************************************************************************************************************************************************/
        if ($nbPool == 2)
        {
            $nb= $nbPoolA;
            echo '
            <div class="espacePool"></div>
            <div class="poolB column center">
                <div id = "poolB" class="nomPool marge center decoPool" nombre="'.$nbPoolB.'">Pool B</div>
                <div class="tabB column blackTransparent ecritureBlanche">
                    <div class="enteteTab red">
                        <div class="casePetit borderSimple center">tour</div>
                        <div class="case borderSimple margeleft center">rencontres</div>
                    </div>
                    <div class="form column">';
                    switch ($nbPoolB) {
/******************************************************************************************************************************************************************************************case 3 */
                        case "3":
                            echo '<div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">1</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                            <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="1score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+0)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+0)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+0)]->getScore0().'">
                                        </form> 
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                            <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="1score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+1)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+1)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+1)]->getScore0().'">
                                        </form> 
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                            <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="1score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+2)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+2)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+2)]->getScore0().'">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">2</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                            <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="2score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+0)]->getScore1().'">
                                        </form>
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                            <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="2score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+2)]->getScore1().'">
                                        </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                            <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="2score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+1)]->getScore1().'">
                                         </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">3</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                            <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="3score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+1)]->getScore2().'">
                                        </form>
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                            <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="3score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+2)]->getScore2().'">
                                        </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                        <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                            <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                            <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="3score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+0)]->getScore2().'">
                                        </form>
                                    </div>
                                </div>
                            </div>';
                            break;
/******************************************************************************************************************************************************************************************case 4 */
                        case "4":
                            echo '<div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">1</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden> 
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="1score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+0)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+0)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+0)]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="1score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+1)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+1)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+1)]->getScore0().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="1score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+2)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+2)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+2)]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="1score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+3)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+3)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+3)]->getScore0().'">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">2</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>    
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="2score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+0)]->getScore1().'">
                                    </form> 
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="2score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+2)]->getScore1().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>    
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="2score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+1)]->getScore1().'">
                                    </form>   
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="2score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+3)]->getScore1().'">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">3</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>    
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="3score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+0)]->getScore2().'">
                                    </form>  
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="3score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+3)]->getScore2().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>     
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="3score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+1)]->getScore2().'">
                                    </form>   
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="3score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+2)]->getScore2().'">
                                    </form>
                                    </div>
                                </div>
                            </div>';
                            break;
/******************************************************************************************************************************************************************************************case 5 */
                        case "5":
                            echo '<div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">1</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>     
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="1score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+0)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+0)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+0)]->getScore0().'">
                                    </form>   
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="1score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+1)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+1)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+1)]->getScore0().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>    
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="1score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+2)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+2)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+2)]->getScore0().'">
                                    </form>    
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="1score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+3)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+3)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+3)]->getScore0().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>   
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="1score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+4)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+4)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+4)]->getScore0().'">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">2</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>    
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="2score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+0)]->getScore1().'">
                                    </form>   
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="2score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+2)]->getScore1().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>  
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="2score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+1)]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="2score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+4)]->getScore1().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>   
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="2score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+3)]->getScore1().'">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">3</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>   
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="3score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+0)]->getScore2().'">
                                    </form>    
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="3score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+4)]->getScore2().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>   
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="3score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+1)]->getScore2().'">
                                    </form> 
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="3score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+3)]->getScore2().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="3score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+2)]->getScore2().'">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">4</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>   
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="4score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+0)]->getScore3().'">
                                    </form>   
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="4score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+3)]->getScore3().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>   
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="4score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+2)]->getScore3().'">
                                    </form>   
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="4score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+4)]->getScore3().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>  
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="4score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+1)]->getScore3().'">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">5</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden> 
                                    <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="5score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+1)]->getScore4().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="5score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+2)]->getScore4().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="5score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+3)]->getScore4().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="5score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+4)]->getScore4().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="5score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+0)]->getScore4().'">
                                    </form>
                                    </div>
                                </div>
                            </div>';
                            break;
/******************************************************************************************************************************************************************************************case 6 */
                        case "6":
                            echo '<div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">1</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden> 
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="1score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+0)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+0)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+0)]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="1score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+1)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+1)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+1)]->getScore0().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="1score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+2)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+2)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+2)]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="1score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+3)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+3)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+3)]->getScore0().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="1score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+4)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+4)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+4)]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="1score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+5)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+5)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+5)]->getScore0().'">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">2</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="2score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+0)]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="2score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+2)]->getScore1().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="2score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+1)]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="2score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+4)]->getScore1().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="2score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+3)]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="2score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+5)]->getScore1().'">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">3</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="3score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+0)]->getScore2().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="3score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+4)]->getScore2().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="3score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+1)]->getScore2().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="3score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+3)]->getScore2().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="3score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+2)]->getScore2().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="3score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+5)]->getScore2().'">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">4</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="4score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+0)]->getScore3().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="4score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+3)]->getScore3().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="4score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+2)]->getScore3().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="4score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+4)]->getScore3().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="4score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+1)]->getScore3().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="4score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+5)]->getScore3().'">
                                    </form>
                                    </div>
                                </div>
                            </div><div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">5</div>
                            <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>    
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="5score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+1)]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="5score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+2)]->getScore4().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="5score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+3)]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="5score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+4)]->getScore4().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="5score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+0)]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="5score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+5)]->getScore4().'">
                                </form>
                                </div>
                            </div>
                        </div>';
                            break;
/******************************************************************************************************************************************************************************************case 7 */
                        case "7":
                            echo '<div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">1</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="1score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+0)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+0)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+0)]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="1score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+1)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+1)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+1)]->getScore0().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="1score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+2)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+2)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+2)]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="1score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+3)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+3)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+3)]->getScore0().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="1score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+4)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+4)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+4)]->getScore0().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="1score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+5)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+5)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+5)]->getScore0().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+6)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+6)]->getIdParticipant().'" id="1score'.$joueurs[($nb+6)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+6)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+6)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+6)]->getScore0().'">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">2</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="2score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+0)]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="2score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+2)]->getScore1().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="2score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+1)]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="2score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+4)]->getScore1().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="2score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+3)]->getScore1().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+6)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+6)]->getIdParticipant().'" id="2score'.$joueurs[($nb+6)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+6)]->getScore1().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="2score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+5)]->getScore1().'">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">3</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="3score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+0)]->getScore2().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="3score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+3)]->getScore2().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="3score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+1)]->getScore2().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="3score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+2)]->getScore2().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="3score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+5)]->getScore2().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+6)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+6)]->getIdParticipant().'" id="3score'.$joueurs[($nb+6)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+6)]->getScore2().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="3score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+4)]->getScore2().'">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">4</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="4score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+0)]->getScore3().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="4score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+4)]->getScore3().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="4score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+2)]->getScore3().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+6)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+6)]->getIdParticipant().'" id="4score'.$joueurs[($nb+6)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+6)]->getScore3().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="4score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+1)]->getScore3().'">
                                    </form>
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="4score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+5)]->getScore3().'">
                                    </form>
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                    <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                    <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                    <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="4score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+3)]->getScore3().'">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">5</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="5score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+0)]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="5score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+5)]->getScore4().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="5score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+1)]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="5score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+3)]->getScore4().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="5score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+4)]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+6)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+6)]->getIdParticipant().'" id="5score'.$joueurs[($nb+6)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+6)]->getScore4().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="5score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+2)]->getScore4().'">
                                </form>
                                </div>
                                </div>
                                </div>
                                <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">6</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="6score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+0)]->getScore5().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+6)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+6)]->getIdParticipant().'" id="6score'.$joueurs[($nb+6)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+6)]->getScore5().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="6score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+2)]->getScore5().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="6score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+4)]->getScore5().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="6score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+3)]->getScore5().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="6score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+5)]->getScore5().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="6score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+1)]->getScore5().'">
                                </form>
                                </div>
                                </div>
                                </div>
                                <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">7</div>
                                <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="7score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+1)]->getScore6().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+6)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+6)]->getIdParticipant().'" id="7score'.$joueurs[($nb+6)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+6)]->getScore6().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="7score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+2)]->getScore6().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="7score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+5)]->getScore6().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="7score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+3)]->getScore6().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="7score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+4)]->getScore6().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="7score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+0)]->getScore6().'">
                                </form>
                                </div>
                            </div>
                        </div>';
                            break;
/******************************************************************************************************************************************************************************************case 8 */
                        case "8":
                            echo '<div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">1</div>
                            <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="1score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+0)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+0)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+0)]->getScore0().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="1score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+1)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+1)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+1)]->getScore0().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="1score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+2)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+2)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+2)]->getScore0().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="1score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+3)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+3)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+3)]->getScore0().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="1score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+4)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+4)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+4)]->getScore0().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="1score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+5)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+5)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+5)]->getScore0().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+6)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+7)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+7)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+6)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+6)]->getIdParticipant().'" id="1score'.$joueurs[($nb+6)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+6)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+6)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+6)]->getScore0().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=0&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+7)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB1 score0" joueur="'.$joueurs[($nb+7)]->getIdParticipant().'" id="1score'.$joueurs[($nb+7)]->getIdParticipant().'" name="score0" type="number" prenomJoueur="'.$joueurs[($nb+7)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$joueurs[($nb+7)]->getParticipant()->getNomParticipant().'" value="'.$joueurs[($nb+7)]->getScore0().'">
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">2</div>
                            <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="2score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+0)]->getScore1().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="2score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+2)]->getScore1().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="2score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+1)]->getScore1().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="2score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+4)]->getScore1().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="2score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+3)]->getScore1().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+6)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+6)]->getIdParticipant().'" id="2score'.$joueurs[($nb+6)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+6)]->getScore1().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+7)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+7)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="2score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+5)]->getScore1().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=1&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+7)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB2 score1" joueur="'.$joueurs[($nb+7)]->getIdParticipant().'" id="2score'.$joueurs[($nb+7)]->getIdParticipant().'" name="score1" type="number" value="'.$joueurs[($nb+7)]->getScore1().'">
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">3</div>
                            <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="3score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+0)]->getScore2().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="3score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+3)]->getScore2().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="3score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+1)]->getScore2().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="3score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+2)]->getScore2().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="3score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+5)]->getScore2().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+6)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+6)]->getIdParticipant().'" id="3score'.$joueurs[($nb+6)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+6)]->getScore2().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+7)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+7)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="3score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+4)]->getScore2().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=2&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+7)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB3 score2" joueur="'.$joueurs[($nb+7)]->getIdParticipant().'" id="3score'.$joueurs[($nb+7)]->getIdParticipant().'" name="score2" type="number" value="'.$joueurs[($nb+7)]->getScore2().'">
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">4</div>
                            <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="4score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+0)]->getScore3().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="4score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+4)]->getScore3().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="4score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+2)]->getScore3().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+6)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+6)]->getIdParticipant().'" id="4score'.$joueurs[($nb+6)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+6)]->getScore3().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="4score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+1)]->getScore3().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="4score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+5)]->getScore3().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+7)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+7)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="4score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+3)]->getScore3().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=3&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+7)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB4 score3" joueur="'.$joueurs[($nb+7)]->getIdParticipant().'" id="4score'.$joueurs[($nb+7)]->getIdParticipant().'" name="score3" type="number" value="'.$joueurs[($nb+7)]->getScore3().'">
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">5</div>
                            <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="5score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+0)]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="5score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+5)]->getScore4().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="5score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+1)]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="5score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+3)]->getScore4().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="5score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+4)]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+6)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+6)]->getIdParticipant().'" id="5score'.$joueurs[($nb+6)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+6)]->getScore4().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+7)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+7)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="5score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+2)]->getScore4().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=4&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+7)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB5 score4" joueur="'.$joueurs[($nb+7)]->getIdParticipant().'" id="5score'.$joueurs[($nb+7)]->getIdParticipant().'" name="score4" type="number" value="'.$joueurs[($nb+7)]->getScore4().'">
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">6</div>
                            <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="6score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+0)]->getScore5().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+6)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+6)]->getIdParticipant().'" id="6score'.$joueurs[($nb+6)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+6)]->getScore5().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="6score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+2)]->getScore5().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="6score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+4)]->getScore5().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="6score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+3)]->getScore5().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="6score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+5)]->getScore5().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+7)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+7)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="6score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+1)]->getScore5().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=5&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+7)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB6 score5" joueur="'.$joueurs[($nb+7)]->getIdParticipant().'" id="6score'.$joueurs[($nb+7)]->getIdParticipant().'" name="score5" type="number" value="'.$joueurs[($nb+7)]->getScore5().'">
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">7</div>
                            <div class="';
                            if ($nbPool == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+1)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+1)]->getIdParticipant().'" id="7score'.$joueurs[($nb+1)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+1)]->getScore6().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+6)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+6)]->getIdParticipant().'" id="7score'.$joueurs[($nb+6)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+6)]->getScore6().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+2)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+2)]->getIdParticipant().'" id="7score'.$joueurs[($nb+2)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+2)]->getScore6().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+5)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+5)]->getIdParticipant().'" id="7score'.$joueurs[($nb+5)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+5)]->getScore6().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+3)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+3)]->getIdParticipant().'" id="7score'.$joueurs[($nb+3)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+3)]->getScore6().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+4)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+4)]->getIdParticipant().'" id="7score'.$joueurs[($nb+4)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+4)]->getScore6().'">
                                </form>
                                </div>
                                <div class="ligne center"><div class="joueur">' . $joueurs[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $joueurs[($nb+7)]->getParticipant()->getPrenomParticipant() . ' ' . $joueurs[($nb+7)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+0)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+0)]->getIdParticipant().'" id="7score'.$joueurs[($nb+0)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+0)]->getScore6().'">
                                </form>
                                <form class="formScore" action="index.php?action=joueurAction&m=modif&idEvenement=' . $idEvenement . '&score=6&nbPoolA=' . $nbPoolA . '&nbPoolB=' . $nbPoolB . '&nbPool=' . $nbPool.'" method="POST">
                                <input type="text" name="idJoueur" value="'.$joueurs[($nb+7)]->getIdJoueur().'" hidden>
                                <input class="numJoueurB numJoueurB7 score6" joueur="'.$joueurs[($nb+7)]->getIdParticipant().'" id="7score'.$joueurs[($nb+7)]->getIdParticipant().'" name="score6" type="number" value="'.$joueurs[($nb+7)]->getScore6().'">
                                </form>
                                </div>
                            </div>
                        </div>';
                        break;
                    }
                    echo'</div>';
        }
            
        echo '</div>
        </div>
        </div>';
 /*************************************************************************************************les scores du tournois */

 echo '
 <div class="listeParticipant column center margeTop ecritureBlanche">
 <div class="entete red">
     <div class="caseScore center">numero joueur</div>
     <div class="caseScore center">prenom joueur</div>
     <div class="caseScore center">nom joueur</div>
     <div class="caseScore center">score</div>
     <div class="caseScore center">classement joueur</div>
 </div>
 <div class="contenuScore column blackTransparent">';
     $i = 1;
     foreach ($joueurs as $joueur) { // affiche un tableau avec chaque participant
         echo '
     <div class="ligne score">
        <div class="caseScore center">'.$i.'</div>
        <div class="caseScore center">' . $joueur->getParticipant()->getPrenomParticipant() . '</div>
        <div class="caseScore center">' . $joueur->getParticipant()->getNomParticipant() . '</div>
        <div joueur="'.$joueur->getIdParticipant().'" id="score'.$joueur->getIdParticipant().'" class="caseScore center scoreTotal">0</div>
        <div class="caseScore center classement"></div>
     </div>
     ';
         $i++;
     }
     ?>
 </div>
   </div>
   <?php
   /*************************************************************************************************Phase finale */
    if ($nbPool == 2) //si il y a 2 pool
     echo '
     <div class="carre column margeTop">
     <div class="phaseFinal">
     <div class="gauche column">
         <p>demi-Final</p>
         <div class="finaliste center" id="1A"></div>
         <div class="finaliste center" id="2B"></div>
     </div>
     <div class="center column">
         <p>Final</p>
         <div class="milieu">
             <div class="finaliste center" id="1"></div>
             <div class="finaliste center" id="2"></div>
         </div>
     </div>
     <div class="droite column">
         <p>demi-Final</p>
         <div class="finaliste center" id="1B"></div>
         <div class="finaliste center" id="2A"></div>
     </div>
 </div>
 <div class="phasePetiteFinal column center">               
     <p>Petite Final</p>
     <div class="milieu">
        <div class="finaliste center" id="3"></div>
        <div class="finaliste center" id="4"></div>
     </div>
 </div>
 </div>' ?>
</div>
<?php 
/*j'utilise un formaulaire vide est caché que je rempli en javascript en cliquant sur le gagnant du tournois si il y a 2 pool sinon il se rempli apres que tout les scores sont indiqué*/
echo'
<form action="index.php?action=gagnantAction&m=ajout" method="post">
   <input class="gagnant" type="text" id="nomGagnant" name="nomGagnant" hidden>
   <input class="gagnant" type="text" id="prenomGagnant" name="prenomGagnant" hidden>
   <input class="gagnant" type="text" id="idEvenement" name="idEvenement" value="'.$idEvenement.'" hidden>
   <div class="bouton retourB marge center">
     <button id="fin" class="menuListe" type="submit">Fin Du tournois</button>
   </div>
</form>';
}
?>
 <script src="JS/tournoisEnregistrement.js"></script>

    