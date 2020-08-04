<?php
if($lvl < 1){
    header("Location: index.php");
}
$listeEvenements = EvenementManager::getList();
?>
<div class="contenu column center">
<div class="tournoisExterieur blackTransparent margeTopGrand border column ecritureBlanche  center">
    <div class="tournois blackTransparent border column ecritureBlanche  margeCo">
        <form action="index.php?action=tournoi" method="post">
            <div class="info marge">
                <label for="nomTournois">selection tournois</label>
                <select name="evenement" id="evenement" required>
                    <option value=""></option>
                    <?php
                    foreach ($listeEvenements as $evenement) {                   // je fais une liste déroulante de chaque evenement
                        $originalDate = $evenement->getDateEvenement();          // format date originel
                        $newDate = date("d-m-Y", strtotime($originalDate));      // nouveau format date  
                        $tab = ParticipationManager::getCount($evenement->getIdEvenement());
                        $nombre = $tab[0];
                        echo '<option id="'. $evenement->getIdEvenement() .'" nombreInscrit="'.$nombre.'" value="' . $evenement->getIdEvenement() . '">' . $evenement->getNomEvenement() . ' / Du ' . $newDate . ' / nombre de joueur inscrit : ' . $nombre . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="info marge">
                <label for="nbPool">nombre de pool</label>
                <select name="nbPool" id="nbPool" required>
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
            <div class="info marge">
                <!-- nombre de joueur en dessous de 3 est inutile pour faire un tournois -->
                <label for="poolA">nombre de joueur pool A</label>
                <select name="poolA" id="poolA" required>
                    <option value=""></option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div class="info marge">
                <!-- nombre de joueur en dessous de 3 est inutile pour faire un tournois sauf le 0 si on fait qu'une seule pool -->
                <label for="poolB">nombre de joueur pool B</label>
                <select name="poolB" id="poolB" required>
                    <option value=""></option>
                    <option value="0">0</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div class="boutons center">
                <div id="boutonTournois" class="bouton center">
                    
                </div>
        </form>
        <form action="index.php?action=menu" method="post">
                <div class="bouton retour">
                    <button class="menuListe marge" type="submit">Retour</button>
                </div>
        </form>
            </div>
            </div>
    </div>
</div>