<?php
if ($lvl < 1) {
    header("Location: index.php");
}
$gagnants = GagnantManager::getList();
?>
<div class="contenu column center">
    <div class="participants blackTransparent margeTopDemiGrand border column">
        <div class="entete red ecritureBlanche">
            <div class="caseFlex center caseHeight">Nom</div>
            <div class="caseFlex center caseHeight">Prenom</div>
            <div class="caseFlex center caseHeight">nom Evenement</div>
            <div class="caseFlex center caseHeight">date Evenement</div>
        </div>
        <div class="form column">
       
            <?php
            foreach ($gagnants as $gagnant) { // on fait une liste déroulante pour afficher chaque gagnant
                $originalDate = $gagnant->getEvenement()->getDateEvenement();
                $newDate = date("d-m-Y", strtotime($originalDate));
                echo'<div class="ligne ecritureBlanche">';
                echo ' <div class="caseFlex center caseHeight">' . $gagnant->getNomGagnant() . '</div>';
                echo ' <div class="caseFlex center caseHeight">' . $gagnant->getPrenomGagnant() . '</div>';
                echo ' <div class="caseFlex center caseHeight">' . $gagnant->getEvenement()->getNomEvenement() . '</div>';
                echo ' <div class="caseFlex center caseHeight">' . $newDate . '</div>';
                echo ' </div>';
            }

            ?>

        </div>

    </div>
</div>
<form action="index.php?action=formGagnant&m=ajout" method="POST">
    <div class="bouton retour center">
        <button class="menuListe marge" type="submit">Ajouter un gagnant</button>
</form>
<form action="index.php?action=menu" method="POST">
        <button class="menuListe marge" type="submit">Retour</button>
    </div>
</form>
