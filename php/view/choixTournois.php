<?php
if ($lvl < 1) {
    header("Location: index.php");
}
$evenements = EvenementManager::getList();
?>
<div class="contenu column center">
    <div class="connexionExterieur blackTransparent margeTopGrand border column center">
        <div class="connexion blackTransparent  border column margeCo">
            <form action="index.php?action=ParticipationListe" method="post">
                <div class="column center margeTop">
                    <select name="tournois" id="tournois" required>
                        <option value="">Choisisez votre tournois</option>
                        <?php
                        foreach ($evenements as $evenement) {
                            $originalDate = $evenement->getDateEvenement();      // date format originel
                            $newDate = date("d-m-Y", strtotime($originalDate));  //format date 
                            echo '';
                            echo ' <option value="' . $evenement->getIdEvenement() . '">' . $evenement->getNomEvenement() . " du : " . $newDate  . '</option>';
                        }
                        ?>
                    </select>
                    <div class="bouton center marge">
                        <button class="menuListe">voir liste</button>
                    </div>
                </div>
            </form>
            <form action="index.php?action=ListeHabitue" method="post">
                <div class="bouton retour marge center">
                    <button class="menuListe" type="submit">habitués</button>
                </div>
            </form>
            <form action="index.php?action=menu" method="post">
                <div class="bouton retour marge center">
                    <button class="menuListe" type="submit">Retour</button>
                </div>
            </form>
        </div>
    </div>
</div>