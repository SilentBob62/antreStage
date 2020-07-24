<?php
if (!isset($_POST['pseudo'])) // On est dans la page de formulaire
{
    require 'Php/View/htmlConnection.php'; // On affiche le formulaire
}
else
{ // Le formulaire a été validé
    $message = '';
    if (empty($_POST['pseudo']) || empty($_POST['motDePasse'])) // Oublie d'un champ
    {
        $message = '<div class="center margeTopGrand">une erreur s\'est produite pendant votre identification.
	                   Vous devez remplir tous les champs</div>
                       <div class="center margeTopGrand">Cliquez <a href="index.php?action=connect">ici</a> pour revenir</div>';
    }
else // On check le mot de passe
    {
        $utilisateur = UtilisateurManager::getByPseudo($_POST['pseudo']); // On recherche dans la base l'utilisateur et on rempli l'objet Utilisateur

        if ($utilisateur->getMdp() == md5(md5($_POST['motDePasse']))) // Acces OK !
        {
            $_SESSION['pseudo'] = $utilisateur->getPseudo();
            $_SESSION['id'] = $utilisateur->getIdUtilisateur();
            $_SESSION['role'] = $utilisateur->getRole();
            $message = '<div class="center margeTopGrand">Bienvenue ' . $utilisateur->getPseudo() . ', vous êtes maintenant connecté!</div>';
            header("refresh:2,url=index.php?action=menu");?>
		<?php }
    else // Acces pas OK !
        {
            $message = '<div class="center margeTopGrand">Une erreur s\'est produite pendant votre identification.<br /> Le mot de passe ou le pseudo
            entré n\'est pas correcte.</div>';
            header("refresh:2,url=index.php?action=connect");
        }
    }
    echo $message;
}

?>