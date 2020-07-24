<?php
echo $now=date("Y-m-d");
$now='"'.$now.'"';
$tournois=EvenementManager::getListEvenementAJour($now);
echo '<div class="contenu column center">
        <div class="connexion blackTransparent margeTopGrand border column">
            <form action="index.php?action=ParticipationActionTest&m=ajout&act=internet" method = "POST">
                <div class="column">';
                echo'
                <select name="idEvenement" id="idEvenement" required>
                <option value="">Choix du tournois</option>';
                foreach($tournois as $tournoi)
                {
                    $nombreInscrit=ParticipationManager::getCount($tournoi->getIdEvenement($tournoi->getIdEvenement()));
                    foreach($nombreInscrit as $nombre)
                    {
                        $nombre=$nombre;
                    }
                    $nombreDePlace=$tournoi->getNbMaxJoueur()-$nombre;
                    echo'<option value="'.$tournoi->getIdEvenement().'"> nom du tournoi : '.$tournoi->getNomEvenement()." | nom du jeu : ".$tournoi->getJeu()->getNomJeu().' | nombre de place restante : '.$nombreDePlace.'</option>';
                }
                echo'</select>';
                    echo'<div class="margeLeft margeTop">
                        <label for="nomParticipant">nom Participant</label>
                        <input class="margeRight input" type="text" id="nomParticipant" name="nomParticipant" placeholder="Nom du Participant" required autofocus >
                    </div>';
                    echo'<div class="margeLeft margeTop">
                        <label for="prenomParticipant">prenom Participant</label>
                        <input class="margeRight input" type="text" id="prenomParticipant" name="prenomParticipant" placeholder="Prenom du Participant"  required autofocus>
                    </div>';
                    echo'<div class="margeLeft margeTop">
                        <label for="mailParticipant">mail Participant</label>
                        <input class="margeRight input" type="text" id="mailParticipant" name="mailParticipant" required autofocus>
                    </div>';
                    echo '<div class="margeLeft margeTop">
                        <label for="telParticipant">telephone Participant</label>
                        <input class="margeRight input" type="text" id="telParticipant" name="telParticipant" required autofocus>
                    </div>';
                    echo '</div>
                <div class="bouton marge center">
                    <button class="menuListe" type="submit">S\'inscrire</button>
                </div>
            </form>
        </div>
    </div>';