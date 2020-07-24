
<?php
function ChargerClasse($classe)
{
    if (file_exists("PHP/controller/" . $classe . ".Class.php")) {
        require "PHP/controller/" . $classe . ".Class.php";
    }

    if (file_exists("PHP/model/" . $classe . ".Class.php")) {
        require "PHP/model/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

Parametre::init();

DbConnect::init();
session_start();

function afficherPage($chemin, $page, $titre)
{
    require 'PHP/view/head.php';
    require 'PHP/view/header.php';
    require $chemin . $page . '.php';
    require 'PHP/view/footer.php';
}

// A l'include de la page Route, le code suivant est exécuté
// Si la variable $get existe, on exploite les informations pour afficher la bonne page
if (isset($_GET['action'])) {
    // En fonction de ce que contient la variable action de $_GET, on ouvre la page correspondante

    switch ($_GET['action']) {

        case 'connect': {
                afficherPage('PHP/view/', 'formConnection', "Connection");
                break;
            }
        case 'deconnect': {
                afficherPage('PHP/view/', 'formDeconnection', "Deconnection");
                break;
            }
        case 'menu': {
                afficherPage('PHP/view/', 'menu', "Menu");
                break;
            }
        case 'evenementListe': {
                afficherPage('PHP/view/', 'evenementListe', "Liste des événements");
                break;
            }
        case 'formEvenement': {
                afficherPage('PHP/view/', 'formEvenement', "formulaire événement");
                break;
            }
        case 'EvenementAction': {
                afficherPage('PHP/view/', 'EvenementAction', "");
                break;
            }
        case 'ListeHabitue': {
                afficherPage('PHP/view/', 'ListeHabitue', "Liste des Habitués des tournois");
                break;
            }
        case 'ParticipationListe': {
                afficherPage('PHP/view/', 'ParticipationListe', "Liste des participants");
                break;
            }
        case 'formParticipation': {
                afficherPage('PHP/view/', 'formParticipation', "form de participation");
                break;
            }
        case 'ParticipationAction': {
                afficherPage('PHP/view/', 'ParticipationAction', "");
                break;
            }
        case 'ParticipationActionMultiple': {
                afficherPage('PHP/view/', 'ParticipationActionMultiple', "");
                break;
            }
        case 'choixTournois': {
                afficherPage('PHP/view/', 'choixTournois', "Choix du tournois");
                break;
            }
        case 'formParticipant': {
                afficherPage('PHP/view/', 'formParticipant', "formulaire du participant");
                break;
            }
        case 'menuTournois': {
                afficherPage('PHP/view/', 'menuTournois', "formulaire du tournois");
                break;
            }
        case 'tournois': {
                afficherPage('PHP/view/', 'tournois', "Tournois");
                break;
            }
        case 'ParticipantAction': {
                afficherPage('PHP/view/', 'ParticipantAction', "");
                break;
            }
        case 'ParticipationListe2': {
                afficherPage('PHP/view/', 'ParticipationListe2', "");
                break;
            }
        case 'gagnantAction': {
                afficherPage('PHP/view/', 'gagnantAction', "");
                break;
            }
        case 'listeGagnant': {
                afficherPage('PHP/view/', 'listeGagnant', "Liste des gagnants");
                break;
            }
        case 'formGagnant': {
                afficherPage('PHP/view/', 'formGagnant', "formulaire gagnant");
                break;
            }
        case 'ListeLot': {
                afficherPage('PHP/view/', 'ListeLot', "liste des lots");
                break;
            }
        case 'LotAction': {
                afficherPage('PHP/view/', 'LotAction', "formulaire des lots");
                break;
            }
        case 'formEnregistrementInternet': {
                afficherPage('PHP/view/', 'formEnregistrementInternet', "formulaire d'enregistrement");
                break;
            }
        case 'ParticipationActionTest': {
                afficherPage('PHP/view/', 'ParticipationActionTest', "");
                break;
            }
        case 'mail': {
                afficherPage('PHP/view/', 'mail', "");
                break;
            }
        case 'ListeJoueur': {
                afficherPage('PHP/view/', 'ListeJoueur', "Liste Des Joueur");
                break;
            }
    }
} else { // Sinon, on affiche la page principale du site
    afficherPage('PHP/view/', 'formConnection', "Connection");
}
