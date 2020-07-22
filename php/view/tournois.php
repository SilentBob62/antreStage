<?php
if($lvl < 1){
    header("Location: index.php");
}
// echo 'idEvenement : ' . $_POST['evenement'] . "<br>";
// echo 'nbPool : ' . $_POST['nbPool'] . "<br>";
// echo 'poolA : ' . $_POST['poolA'] . "<br>";
// echo 'poolB : ' . $_POST['poolB'] . "<br>";
$nbPoolA=$_POST['poolA'];
$nbPoolB=$_POST['poolB'];
$idEvenement=$_POST["evenement"];
$evenement = EvenementManager::getById($_POST['evenement']);
// $participations = ParticipationManager::getListByIdEvenement($_POST['evenement']);
$participations=ParticipationManager::getListRandom($_POST['evenement']);
// var_dump($_POST["evenement"]);
echo '<div class="center"><div class="titreTournois marge center decoTitre">' . $evenement->getNomEvenement() . '</div></div>';
?>

<div class="contenu column center">
    <div class="Pool">
        <div class="poolA column center">
            <div id = "poolA" <?php if($nbPoolB) echo'class="nomPool marge center decoPool"'?> nombre=<?php echo $nbPoolA ?>><?php if($nbPoolB) echo 'Pool A'?></div>
            <div class="tabA column blackTransparent ecritureBlanche">
                <div class="enteteTab red">
                    <div class="casePetit borderSimple center">tour</div>
                    <div class=<?php if ($_POST['nbPool'] == 2) echo '"case center column borderSimple';
                                else echo '"caseGrand column borderSimple';
                                echo ' borderSimple margeleft center"'; ?>>rencontres</div>
                </div>
                <div class="form column">
                <?php
                switch ($_POST['poolA']) {
                    case "3":
                        echo '<div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">1</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                    <input class="numJoueurA numJoueurA1" joueur="'.$participations[0]->getIdParticipant().'" id="1score'.$participations[0]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[0]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[0]->getParticipant()->getNomParticipant().'">
                                    <input class="numJoueurA numJoueurA1"  joueur="'.$participations[1]->getIdParticipant().'" id="1score'.$participations[1]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[1]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[1]->getParticipant()->getNomParticipant().'">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                    <input class="numJoueurA numJoueurA1"  joueur="'.$participations[2]->getIdParticipant().'" id="1score'.$participations[2]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[2]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[2]->getParticipant()->getNomParticipant().'">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">2</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                   <input class="numJoueurA numJoueurA2"  joueur="'.$participations[0]->getIdParticipant().'" id="2score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                   <input class="numJoueurA numJoueurA2 joueur="'.$participations[2]->getIdParticipant().'" id="2score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                   <input class="numJoueurA numJoueurA2 joueur="'.$participations[1]->getIdParticipant().'" id="2score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div id="tourAMax" class="casePetit borderSimple center fondRouge tourA">3</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[1]->getIdParticipant().'" id="3score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[2]->getIdParticipant().'" id="3score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[0]->getIdParticipant().'" id="3score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>';
                        break;
                    case "4":
                        echo '<div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">1</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[0]->getIdParticipant().'" id="1score'.$participations[0]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[0]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[0]->getParticipant()->getNomParticipant().'">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[1]->getIdParticipant().'" id="1score'.$participations[1]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[1]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[1]->getParticipant()->getNomParticipant().'">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[2]->getIdParticipant().'" id="1score'.$participations[2]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[2]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[2]->getParticipant()->getNomParticipant().'">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[3]->getIdParticipant().'" id="1score'.$participations[3]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[3]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[3]->getParticipant()->getNomParticipant().'">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">2</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[0]->getIdParticipant().'" id="2score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[2]->getIdParticipant().'" id="2score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[1]->getIdParticipant().'" id="2score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[3]->getIdParticipant().'" id="2score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div id="tourAMax" class="casePetit borderSimple center fondRouge tourA">3</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[0]->getIdParticipant().'" id="3score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[3]->getIdParticipant().'" id="3score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[1]->getIdParticipant().'" id="3score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[2]->getIdParticipant().'" id="3score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>';
                        break;
                    case "5":
                        echo '<div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">1</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[0]->getIdParticipant().'" id="1score'.$participations[0]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[0]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[0]->getParticipant()->getNomParticipant().'">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[1]->getIdParticipant().'" id="1score'.$participations[1]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[1]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[1]->getParticipant()->getNomParticipant().'">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[2]->getIdParticipant().'" id="1score'.$participations[2]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[2]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[2]->getParticipant()->getNomParticipant().'">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[3]->getIdParticipant().'" id="1score'.$participations[3]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[3]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[3]->getParticipant()->getNomParticipant().'">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[4]->getIdParticipant().'" id="1score'.$participations[4]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[4]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[4]->getParticipant()->getNomParticipant().'">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">2</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[0]->getIdParticipant().'" id="2score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[2]->getIdParticipant().'" id="2score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[1]->getIdParticipant().'" id="2score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[4]->getIdParticipant().'" id="2score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[3]->getIdParticipant().'" id="2score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">3</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[0]->getIdParticipant().'" id="3score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[4]->getIdParticipant().'" id="3score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[1]->getIdParticipant().'" id="3score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[3]->getIdParticipant().'" id="3score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[2]->getIdParticipant().'" id="3score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">4</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[0]->getIdParticipant().'" id="4score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[3]->getIdParticipant().'" id="4score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[2]->getIdParticipant().'" id="4score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[4]->getIdParticipant().'" id="4score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[1]->getIdParticipant().'" id="4score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div id="tourAMax" class="casePetit borderSimple center fondRouge tourA">5</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA5" joueur="'.$participations[1]->getIdParticipant().'" id="5score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA5" joueur="'.$participations[2]->getIdParticipant().'" id="5score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA5" joueur="'.$participations[3]->getIdParticipant().'" id="5score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA5" joueur="'.$participations[4]->getIdParticipant().'" id="5score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA5" joueur="'.$participations[0]->getIdParticipant().'" id="5score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>';
                        break;
                    case "6":
                        echo '<div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">1</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[0]->getIdParticipant().'" id="1score'.$participations[0]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[0]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[0]->getParticipant()->getNomParticipant().'">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[1]->getIdParticipant().'" id="1score'.$participations[1]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[1]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[1]->getParticipant()->getNomParticipant().'">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[2]->getIdParticipant().'" id="1score'.$participations[2]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[2]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[2]->getParticipant()->getNomParticipant().'">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[3]->getIdParticipant().'" id="1score'.$participations[3]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[3]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[3]->getParticipant()->getNomParticipant().'">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[4]->getIdParticipant().'" id="1score'.$participations[4]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[4]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[4]->getParticipant()->getNomParticipant().'">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[5]->getIdParticipant().'" id="1score'.$participations[5]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[5]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[5]->getParticipant()->getNomParticipant().'">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">2</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[0]->getIdParticipant().'" id="2score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[2]->getIdParticipant().'" id="2score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[1]->getIdParticipant().'" id="2score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[4]->getIdParticipant().'" id="2score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[3]->getIdParticipant().'" id="2score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[5]->getIdParticipant().'" id="2score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">3</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[0]->getIdParticipant().'" id="3score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[4]->getIdParticipant().'" id="3score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[1]->getIdParticipant().'" id="3score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[3]->getIdParticipant().'" id="3score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[2]->getIdParticipant().'" id="3score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[5]->getIdParticipant().'" id="3score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">4</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[0]->getIdParticipant().'" id="4score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[3]->getIdParticipant().'" id="4score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[2]->getIdParticipant().'" id="4score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[4]->getIdParticipant().'" id="4score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[1]->getIdParticipant().'" id="4score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[5]->getIdParticipant().'" id="4score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div><div class="infoTabA bordureRouge margeTop">
                        <div id="tourAMax" class="casePetit borderSimple center fondRouge tourA">5</div>
                        <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[1]->getIdParticipant().'" id="5score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[2]->getIdParticipant().'" id="5score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[3]->getIdParticipant().'" id="5score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[4]->getIdParticipant().'" id="5score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[0]->getIdParticipant().'" id="5score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[5]->getIdParticipant().'" id="5score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                            </div>
                        </div>
                    </div>';
                        break;
                    case "7":
                        echo '<div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">1</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[0]->getIdParticipant().'" id="1score'.$participations[0]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[0]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[0]->getParticipant()->getNomParticipant().'">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[1]->getIdParticipant().'" id="1score'.$participations[1]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[1]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[1]->getParticipant()->getNomParticipant().'">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[2]->getIdParticipant().'" id="1score'.$participations[2]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[2]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[2]->getParticipant()->getNomParticipant().'">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[3]->getIdParticipant().'" id="1score'.$participations[3]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[3]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[3]->getParticipant()->getNomParticipant().'">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[4]->getIdParticipant().'" id="1score'.$participations[4]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[4]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[4]->getParticipant()->getNomParticipant().'">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[5]->getIdParticipant().'" id="1score'.$participations[5]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[5]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[5]->getParticipant()->getNomParticipant().'">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[6]->getParticipant()->getPrenomParticipant() . ' ' . $participations[6]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA1" joueur="'.$participations[6]->getIdParticipant().'" id="1score'.$participations[6]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[6]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[6]->getParticipant()->getNomParticipant().'">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">2</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[0]->getIdParticipant().'" id="2score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[2]->getIdParticipant().'" id="2score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[1]->getIdParticipant().'" id="2score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[4]->getIdParticipant().'" id="2score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[6]->getParticipant()->getPrenomParticipant() . ' ' . $participations[6]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[3]->getIdParticipant().'" id="2score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[6]->getIdParticipant().'" id="2score'.$participations[6]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA2" joueur="'.$participations[5]->getIdParticipant().'" id="2score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">3</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[0]->getIdParticipant().'" id="3score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[3]->getIdParticipant().'" id="3score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[1]->getIdParticipant().'" id="3score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[2]->getIdParticipant().'" id="3score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[6]->getParticipant()->getPrenomParticipant() . ' ' . $participations[6]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[5]->getIdParticipant().'" id="3score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[6]->getIdParticipant().'" id="3score'.$participations[6]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA3" joueur="'.$participations[4]->getIdParticipant().'" id="3score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">4</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[0]->getIdParticipant().'" id="4score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[4]->getIdParticipant().'" id="4score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[6]->getParticipant()->getPrenomParticipant() . ' ' . $participations[6]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[2]->getIdParticipant().'" id="4score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[6]->getIdParticipant().'" id="4score'.$participations[6]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[1]->getIdParticipant().'" id="4score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[5]->getIdParticipant().'" id="4score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurA numJoueurA4" joueur="'.$participations[3]->getIdParticipant().'" id="4score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">5</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[0]->getIdParticipant().'" id="5score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[5]->getIdParticipant().'" id="5score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[1]->getIdParticipant().'" id="5score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[3]->getIdParticipant().'" id="5score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[6]->getParticipant()->getPrenomParticipant() . ' ' . $participations[6]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[4]->getIdParticipant().'" id="5score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[6]->getIdParticipant().'" id="5score'.$participations[6]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[2]->getIdParticipant().'" id="5score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                            </div>
                            </div>
                            </div>
                            <div class="infoTabA bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourA">6</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[6]->getParticipant()->getPrenomParticipant() . ' ' . $participations[6]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[0]->getIdParticipant().'" id="6score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[6]->getIdParticipant().'" id="6score'.$participations[6]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[2]->getIdParticipant().'" id="6score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[4]->getIdParticipant().'" id="6score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[3]->getIdParticipant().'" id="6score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[5]->getIdParticipant().'" id="6score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[1]->getIdParticipant().'" id="6score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                            </div>
                            </div>
                            </div>
                            <div class="infoTabA bordureRouge margeTop">
                            <div id="tourAMax" class="casePetit borderSimple center fondRouge tourA">7</div>
                            <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[6]->getParticipant()->getPrenomParticipant() . ' ' . $participations[6]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[1]->getIdParticipant().'" id="7score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[6]->getIdParticipant().'" id="7score'.$participations[6]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[2]->getIdParticipant().'" id="7score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[5]->getIdParticipant().'" id="7score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[3]->getIdParticipant().'" id="7score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[4]->getIdParticipant().'" id="7score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[0]->getIdParticipant().'" id="7score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                            </div>
                        </div>
                    </div>';
                        break;
                    case "8":
                        echo '<div class="infoTabA bordureRouge margeTop">
                        <div class="casePetit borderSimple center fondRouge tourA">1</div>
                        <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA1" joueur="'.$participations[0]->getIdParticipant().'" id="1score'.$participations[0]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[0]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[0]->getParticipant()->getNomParticipant().'">
                                 <input class="numJoueurA numJoueurA1" joueur="'.$participations[1]->getIdParticipant().'" id="1score'.$participations[1]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[1]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[1]->getParticipant()->getNomParticipant().'">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA1" joueur="'.$participations[2]->getIdParticipant().'" id="1score'.$participations[2]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[2]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[2]->getParticipant()->getNomParticipant().'">
                                 <input class="numJoueurA numJoueurA1" joueur="'.$participations[3]->getIdParticipant().'" id="1score'.$participations[3]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[3]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[3]->getParticipant()->getNomParticipant().'">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA1" joueur="'.$participations[4]->getIdParticipant().'" id="1score'.$participations[4]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[4]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[4]->getParticipant()->getNomParticipant().'">
                                 <input class="numJoueurA numJoueurA1" joueur="'.$participations[5]->getIdParticipant().'" id="1score'.$participations[5]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[5]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[5]->getParticipant()->getNomParticipant().'">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[6]->getParticipant()->getPrenomParticipant() . ' ' . $participations[6]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[7]->getParticipant()->getPrenomParticipant() . ' ' . $participations[7]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA1" joueur="'.$participations[6]->getIdParticipant().'" id="1score'.$participations[6]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[6]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[6]->getParticipant()->getNomParticipant().'">
                                 <input class="numJoueurA numJoueurA1" joueur="'.$participations[7]->getIdParticipant().'" id="1score'.$participations[7]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[7]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[7]->getParticipant()->getNomParticipant().'">
                            </div>
                        </div>
                    </div>
                    <div class="infoTabA bordureRouge margeTop">
                        <div class="casePetit borderSimple center fondRouge tourA">2</div>
                        <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA2" joueur="'.$participations[0]->getIdParticipant().'" id="2score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA2" joueur="'.$participations[2]->getIdParticipant().'" id="2score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA2" joueur="'.$participations[1]->getIdParticipant().'" id="2score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA2" joueur="'.$participations[4]->getIdParticipant().'" id="2score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[6]->getParticipant()->getPrenomParticipant() . ' ' . $participations[6]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA2" joueur="'.$participations[3]->getIdParticipant().'" id="2score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA2" joueur="'.$participations[6]->getIdParticipant().'" id="2score'.$participations[6]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[7]->getParticipant()->getPrenomParticipant() . ' ' . $participations[7]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA2" joueur="'.$participations[5]->getIdParticipant().'" id="2score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA2" joueur="'.$participations[7]->getIdParticipant().'" id="2score'.$participations[7]->getIdParticipant().'" name="score" type="number">
                            </div>
                        </div>
                    </div>
                    <div class="infoTabA bordureRouge margeTop">
                        <div class="casePetit borderSimple center fondRouge tourA">3</div>
                        <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA3" joueur="'.$participations[0]->getIdParticipant().'" id="3score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA3" joueur="'.$participations[3]->getIdParticipant().'" id="3score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA3" joueur="'.$participations[1]->getIdParticipant().'" id="3score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA3" joueur="'.$participations[2]->getIdParticipant().'" id="3score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[6]->getParticipant()->getPrenomParticipant() . ' ' . $participations[6]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA3" joueur="'.$participations[5]->getIdParticipant().'" id="3score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA3" joueur="'.$participations[6]->getIdParticipant().'" id="3score'.$participations[6]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[7]->getParticipant()->getPrenomParticipant() . ' ' . $participations[7]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA3" joueur="'.$participations[4]->getIdParticipant().'" id="3score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA3" joueur="'.$participations[7]->getIdParticipant().'" id="3score'.$participations[7]->getIdParticipant().'" name="score" type="number">
                            </div>
                        </div>
                    </div>
                    <div class="infoTabA bordureRouge margeTop">
                        <div class="casePetit borderSimple center fondRouge tourA">4</div>
                        <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA4" joueur="'.$participations[0]->getIdParticipant().'" id="4score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA4" joueur="'.$participations[4]->getIdParticipant().'" id="4score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[6]->getParticipant()->getPrenomParticipant() . ' ' . $participations[6]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA4" joueur="'.$participations[2]->getIdParticipant().'" id="4score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA4" joueur="'.$participations[6]->getIdParticipant().'" id="4score'.$participations[6]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA4" joueur="'.$participations[1]->getIdParticipant().'" id="4score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA4" joueur="'.$participations[5]->getIdParticipant().'" id="4score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[7]->getParticipant()->getPrenomParticipant() . ' ' . $participations[7]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA4" joueur="'.$participations[3]->getIdParticipant().'" id="4score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA4" joueur="'.$participations[7]->getIdParticipant().'" id="4score'.$participations[7]->getIdParticipant().'" name="score" type="number">
                            </div>
                        </div>
                    </div>
                    <div class="infoTabA bordureRouge margeTop">
                        <div class="casePetit borderSimple center fondRouge tourA">5</div>
                        <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[0]->getIdParticipant().'" id="5score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[5]->getIdParticipant().'" id="5score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[1]->getIdParticipant().'" id="5score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[3]->getIdParticipant().'" id="5score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[6]->getParticipant()->getPrenomParticipant() . ' ' . $participations[6]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[4]->getIdParticipant().'" id="5score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[6]->getIdParticipant().'" id="5score'.$participations[6]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[7]->getParticipant()->getPrenomParticipant() . ' ' . $participations[7]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[2]->getIdParticipant().'" id="5score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA5" joueur="'.$participations[7]->getIdParticipant().'" id="5score'.$participations[7]->getIdParticipant().'" name="score" type="number">
                            </div>
                        </div>
                    </div>
                    <div class="infoTabA bordureRouge margeTop">
                        <div class="casePetit borderSimple center fondRouge tourA">6</div>
                        <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[6]->getParticipant()->getPrenomParticipant() . ' ' . $participations[6]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[0]->getIdParticipant().'" id="6score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[6]->getIdParticipant().'" id="6score'.$participations[6]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[2]->getIdParticipant().'" id="6score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[4]->getIdParticipant().'" id="6score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[3]->getIdParticipant().'" id="6score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[5]->getIdParticipant().'" id="6score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[7]->getParticipant()->getPrenomParticipant() . ' ' . $participations[7]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[1]->getIdParticipant().'" id="6score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA6" joueur="'.$participations[7]->getIdParticipant().'" id="6score'.$participations[7]->getIdParticipant().'" name="score" type="number">
                            </div>
                        </div>
                    </div>
                    <div class="infoTabA bordureRouge margeTop">
                        <div id="tourAMax" class="casePetit borderSimple center fondRouge tourA">7</div>
                        <div class="';
                        if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                        else echo 'caseGrand column borderSimple';
                        echo ' column borderSimple">
                            <div class="ligne center"><div class="joueur">' . $participations[1]->getParticipant()->getPrenomParticipant() . ' ' . $participations[1]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[6]->getParticipant()->getPrenomParticipant() . ' ' . $participations[6]->getParticipant()->getNomParticipant() . '</div></div>   
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[1]->getIdParticipant().'" id="7score'.$participations[1]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[6]->getIdParticipant().'" id="7score'.$participations[6]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[2]->getParticipant()->getPrenomParticipant() . ' ' . $participations[2]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[5]->getParticipant()->getPrenomParticipant() . ' ' . $participations[5]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[2]->getIdParticipant().'" id="7score'.$participations[2]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[5]->getIdParticipant().'" id="7score'.$participations[5]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[3]->getParticipant()->getPrenomParticipant() . ' ' . $participations[3]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[4]->getParticipant()->getPrenomParticipant() . ' ' . $participations[4]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[3]->getIdParticipant().'" id="7score'.$participations[3]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[4]->getIdParticipant().'" id="7score'.$participations[4]->getIdParticipant().'" name="score" type="number">
                            </div>
                            <div class="ligne center"><div class="joueur">' . $participations[0]->getParticipant()->getPrenomParticipant() . ' ' . $participations[0]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[7]->getParticipant()->getPrenomParticipant() . ' ' . $participations[7]->getParticipant()->getNomParticipant() . '</div></div>     
                            <div class="ligne">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[0]->getIdParticipant().'" id="7score'.$participations[0]->getIdParticipant().'" name="score" type="number">
                                 <input class="numJoueurA numJoueurA7" joueur="'.$participations[7]->getIdParticipant().'" id="7score'.$participations[7]->getIdParticipant().'" name="score" type="number">
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
         * ********************************************************************************************************************************************************************************************************************************
         * *******************************************************************************************************************************************************************************************************************************/
        if ($_POST['nbPool'] == 2)
        {
            $nb= $_POST['poolA'];
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
                    switch ($_POST['poolB']) {
                        case "3":
                            echo '<div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">1</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="1score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+0)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+0)]->getParticipant()->getNomParticipant().'">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="1score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+1)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+1)]->getParticipant()->getNomParticipant().'">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="1score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+2)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+2)]->getParticipant()->getNomParticipant().'">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">2</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="2score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="2score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="2score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">3</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="3score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="3score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="3score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                </div>
                            </div>';
                            break;
                        case "4":
                            echo '<div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">1</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="1score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+0)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+0)]->getParticipant()->getNomParticipant().'">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="1score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+1)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+1)]->getParticipant()->getNomParticipant().'">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="1score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+2)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+2)]->getParticipant()->getNomParticipant().'">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="1score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+3)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+3)]->getParticipant()->getNomParticipant().'">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">2</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="2score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="2score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="2score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="2score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">3</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="3score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="3score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="3score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="3score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                </div>
                            </div>';
                            break;
                        case "5":
                            echo '<div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">1</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="1score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+0)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+0)]->getParticipant()->getNomParticipant().'">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="1score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+1)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+1)]->getParticipant()->getNomParticipant().'">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="1score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+2)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+2)]->getParticipant()->getNomParticipant().'">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="1score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+3)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+3)]->getParticipant()->getNomParticipant().'">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="1score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+4)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+4)]->getParticipant()->getNomParticipant().'">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">2</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="2score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="2score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="2score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="2score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="2score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">3</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="3score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="3score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="3score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="3score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="3score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">4</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="4score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="4score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="4score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="4score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="4score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">5</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="5score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="5score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="5score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="5score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="5score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                </div>
                            </div>';
                            break;
                        case "6":
                            echo '<div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">1</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="1score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+0)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+0)]->getParticipant()->getNomParticipant().'">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="1score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+1)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+1)]->getParticipant()->getNomParticipant().'">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="1score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+2)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+2)]->getParticipant()->getNomParticipant().'">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="1score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+3)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+3)]->getParticipant()->getNomParticipant().'">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="1score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+4)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+4)]->getParticipant()->getNomParticipant().'">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="1score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+5)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+5)]->getParticipant()->getNomParticipant().'">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">2</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="2score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="2score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="2score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="2score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="2score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="2score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">3</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="3score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="3score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="3score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="3score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="3score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="3score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">4</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="4score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="4score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="4score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="4score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="4score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="4score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                </div>
                            </div><div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">5</div>
                            <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="5score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="5score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="5score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="5score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="5score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="5score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>';
                            break;
                        case "7":
                            echo '<div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">1</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="1score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+0)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+0)]->getParticipant()->getNomParticipant().'">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="1score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+1)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+1)]->getParticipant()->getNomParticipant().'">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="1score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+2)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+2)]->getParticipant()->getNomParticipant().'">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="1score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+3)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+3)]->getParticipant()->getNomParticipant().'">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="1score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+4)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+4)]->getParticipant()->getNomParticipant().'">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="1score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+5)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+5)]->getParticipant()->getNomParticipant().'">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+6)]->getIdParticipant().'" id="1score'.$participations[($nb+6)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+6)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+6)]->getParticipant()->getNomParticipant().'">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">2</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="2score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="2score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="2score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="2score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="2score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+6)]->getIdParticipant().'" id="2score'.$participations[($nb+6)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="2score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">3</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="3score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="3score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="3score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="3score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="3score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+6)]->getIdParticipant().'" id="3score'.$participations[($nb+6)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="3score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">4</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>   
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="4score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="4score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="4score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+6)]->getIdParticipant().'" id="4score'.$participations[($nb+6)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="4score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="4score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                    <div class="ligne center"><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                    <div class="ligne">
                                         <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="4score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">5</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="5score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="5score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="5score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="5score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="5score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+6)]->getIdParticipant().'" id="5score'.$participations[($nb+6)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="5score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                </div>
                                </div>
                                <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">6</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="6score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+6)]->getIdParticipant().'" id="6score'.$participations[($nb+6)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="6score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="6score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="6score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="6score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="6score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                </div>
                                </div>
                                <div class="infoTabB bordureRouge margeTop">
                                <div class="casePetit borderSimple center fondRouge tourB">7</div>
                                <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="7score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+6)]->getIdParticipant().'" id="7score'.$participations[($nb+6)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="7score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="7score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="7score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="7score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="7score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>';
                            break;
                        case "8":
                            echo '<div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">1</div>
                            <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="1score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+0)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+0)]->getParticipant()->getNomParticipant().'">
                                     <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="1score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+1)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+1)]->getParticipant()->getNomParticipant().'">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="1score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+2)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+2)]->getParticipant()->getNomParticipant().'">
                                     <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="1score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+3)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+3)]->getParticipant()->getNomParticipant().'">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="1score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+4)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+4)]->getParticipant()->getNomParticipant().'">
                                     <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="1score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+5)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+5)]->getParticipant()->getNomParticipant().'">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+6)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+7)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+7)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+6)]->getIdParticipant().'" id="1score'.$participations[($nb+6)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+6)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+6)]->getParticipant()->getNomParticipant().'">
                                     <input class="numJoueurB numJoueurB1" joueur="'.$participations[($nb+7)]->getIdParticipant().'" id="1score'.$participations[($nb+7)]->getIdParticipant().'" name="score" type="number" prenomJoueur="'.$participations[($nb+7)]->getParticipant()->getPrenomParticipant().'" nomJoueur="'.$participations[($nb+7)]->getParticipant()->getNomParticipant().'">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">2</div>
                            <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="2score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="2score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="2score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="2score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="2score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+6)]->getIdParticipant().'" id="2score'.$participations[($nb+6)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+7)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+7)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="2score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB2" joueur="'.$participations[($nb+7)]->getIdParticipant().'" id="2score'.$participations[($nb+7)]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">3</div>
                            <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="3score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="3score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="3score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="3score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="3score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+6)]->getIdParticipant().'" id="3score'.$participations[($nb+6)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+7)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+7)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="3score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB3" joueur="'.$participations[($nb+7)]->getIdParticipant().'" id="3score'.$participations[($nb+7)]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">4</div>
                            <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="4score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="4score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="4score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+6)]->getIdParticipant().'" id="4score'.$participations[($nb+6)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="4score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="4score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+7)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+7)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="4score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB4" joueur="'.$participations[($nb+7)]->getIdParticipant().'" id="4score'.$participations[($nb+7)]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">5</div>
                            <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="5score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="5score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="5score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="5score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="5score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+6)]->getIdParticipant().'" id="5score'.$participations[($nb+6)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+7)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+7)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="5score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB5" joueur="'.$participations[($nb+7)]->getIdParticipant().'" id="5score'.$participations[($nb+7)]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">6</div>
                            <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="6score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+6)]->getIdParticipant().'" id="6score'.$participations[($nb+6)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="6score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="6score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="6score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="6score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+7)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+7)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="6score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB6" joueur="'.$participations[($nb+7)]->getIdParticipant().'" id="6score'.$participations[($nb+7)]->getIdParticipant().'" name="score" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="infoTabB bordureRouge margeTop">
                            <div class="casePetit borderSimple center fondRouge tourB">7</div>
                            <div class="';
                            if ($_POST['nbPool'] == 2) echo 'case column borderSimple';
                            else echo 'caseGrand column borderSimple';
                            echo ' column borderSimple">
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+1)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+1)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+6)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+6)]->getParticipant()->getNomParticipant() . '</div></div>   
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+1)]->getIdParticipant().'" id="7score'.$participations[($nb+1)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+6)]->getIdParticipant().'" id="7score'.$participations[($nb+6)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+2)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+2)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+5)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+5)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+2)]->getIdParticipant().'" id="7score'.$participations[($nb+2)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+5)]->getIdParticipant().'" id="7score'.$participations[($nb+5)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+3)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+3)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+4)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+4)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+3)]->getIdParticipant().'" id="7score'.$participations[($nb+3)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+4)]->getIdParticipant().'" id="7score'.$participations[($nb+4)]->getIdParticipant().'" name="score" type="number">
                                </div>
                                <div class="ligne center"><div class="joueur">' . $participations[($nb+0)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+0)]->getParticipant()->getNomParticipant() . '</div><div class="joueur">' . $participations[($nb+7)]->getParticipant()->getPrenomParticipant() . ' ' . $participations[($nb+7)]->getParticipant()->getNomParticipant() . '</div></div>     
                                <div class="ligne">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+0)]->getIdParticipant().'" id="7score'.$participations[($nb+0)]->getIdParticipant().'" name="score" type="number">
                                     <input class="numJoueurB numJoueurB7" joueur="'.$participations[($nb+7)]->getIdParticipant().'" id="7score'.$participations[($nb+7)]->getIdParticipant().'" name="score" type="number">
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
            foreach ($participations as $participation) {
                echo '
            <div class="ligne score">
               <div class="caseScore center">'.$i.'</div>
               <div class="caseScore center">' . $participation->getParticipant()->getPrenomParticipant() . '</div>
               <div class="caseScore center">' . $participation->getParticipant()->getNomParticipant() . '</div>
               <div joueur="'.$participation->getIdParticipant().'" id="score'.$participation->getIdParticipant().'" class="caseScore center scoreTotal">0</div>
               <div class="caseScore center classement"></div>
            </div>
            ';
                $i++;
            }
            ?>
        </div>
          </div>
          <?php
           if ($_POST['nbPool'] == 2)
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
    <?php echo'
     <form action="index.php?action=gagnantAction&m=ajout" method="post">
          <input class="gagnant" type="text" id="nomGagnant" name="nomGagnant" hidden>
          <input class="gagnant" type="text" id="prenomGagnant" name="prenomGagnant" hidden>
          <input class="gagnant" type="text" id="idEvenement" name="idEvenement" value="'.$idEvenement.'" hidden>
          <div class="bouton retourB marge center">
            <button id="fin" class="menuListe" type="submit">Fin Du tournois</button>
          </div>
     </form>'?>

