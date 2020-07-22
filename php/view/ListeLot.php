<?php
if ($lvl < 1) {
    header("Location: index.php");
}
// var_dump($_POST);
if (!empty($_POST))
{
    $idEvenements=$_POST;
    foreach($idEvenements as $idEvenement)
    {
        $id=$idEvenement;
    }
}
else
{
    $idEvenements=$_GET['idEvenement'];
    $id=$idEvenements;
}



$lots = LotManager::getListByIdEvenement($id);
$evenement=EvenementManager::getById($id);
// var_dump($evenement);
$nombreMax=$evenement->getNbMaxJoueur();
// var_dump($nombreParticipant) ;
$listeLots=LotManager::getListByIdEvenement($id);
if (empty($listeLots))
{
    // echo 'pas de lot';
    for($i=0;$i<$nombreMax;$i++)
    {
        $a= new Lot(["idEvenement"=>$id]);
        LotManager::add($a);
        header('location:index.php?action=ListeLot&idEvenement='.$id); 
    }
}

echo '<div class="center"><div class="titreTournois marge center decoTitre">' . $evenement->getNomEvenement() . '</div></div>';

?>
<div class="contenu column center">
    <div class="tournois blackTransparent margeTopGrand border column">
        <div class="entete red ecritureBlanche">
            <div class="case center margeDemiTop">classement</div>
            <div class="case center margeDemiTop">lot</div>
            <div class="case center margeDemiTop">modifier</div>
        </div>
        <div class="form column">
            <?php
            $i=1;
            foreach ($lots as $lot) {
                echo '<div class="ligne ecritureBlanche column ">';
                echo    '<form action="index.php?action=LotAction&m=modif" method = "POST">';
                echo        '<div class="infoListe">';
                echo'           <div class="case center margeDemiTop">'.$i.'</div>';
                echo            '<input type="text" id="'.$lot->getIdLot(). '" name="IdLot" value="' . $lot->getIdLot() . '" hidden>';
                echo            '<div class="case center margeDemiTop"><input type="text" id="nomLot' .$lot->getIdLot(). '" name="nomLot" value="' . $lot->getNomLot() . '"></div>';
                echo            '<input type="text" id="IdEvenement' .$lot->getIdLot(). '" name="IdEvenement" value="' .$id. '" hidden>';
                echo            '<div class="case center ">
                                    <div class="bouton marge center">
                                        <button class="menuDansListe" type="submit">Enregistrer</button>
                                    </div>
                                </div>';
                echo        '</div>'; 
                echo '</form>';
                echo' </div>';  
                $i++;          
            }
            
            ?>

        </div>
        <div class="boutons center">
        <?php
            echo '<form action="index.php?action=ParticipationListe&idEvenement='.$id.'" method="POST">';
            ?>
                <div class="bouton retour marge">
                    <button class="menuListe" type="submit">Retour</button>
                </div>
            </form>
        </div>
    </div>
</div>