/*utilisateur*/
/**utilisateur modo et mot de passe modo **/
INSERT INTO `utilisateur` (`idUtilisateur`, `pseudo`, `mdp`, `role`) VALUES (NULL, 'modo', 'b4bd3c0453ef20e66f2fcc026e3816ec', '1');


/*jeu*/
INSERT INTO `jeu` (`idJeu`, `nomJeu`) VALUES (NULL, 'Magic');
INSERT INTO `jeu` (`idJeu`, `nomJeu`) VALUES (NULL, 'Zombicide');
INSERT INTO `jeu` (`idJeu`, `nomJeu`) VALUES (NULL, 'Kill team');
INSERT INTO `jeu` (`idJeu`, `nomJeu`) VALUES (NULL, 'Conan');
INSERT INTO `jeu` (`idJeu`, `nomJeu`) VALUES (NULL, 'Monster Slaughter');


/*preference*/
INSERT INTO `preference` (`idPreference`, `nomPreference`) VALUES (NULL, 'Carte');
INSERT INTO `preference` (`idPreference`, `nomPreference`) VALUES (NULL, 'Plateau');
INSERT INTO `preference` (`idPreference`, `nomPreference`) VALUES (NULL, 'Figurine');


/*evenement*/
INSERT INTO `evenement` (`idEvenement`, `nomEvenement`, `cout`, `nbMaxJoueur`, `dateEvenement`, `idJeu`) VALUES (NULL, 'Draft Ikoria', '3€', '12', '2020-07-22', '1');
INSERT INTO `evenement` (`idEvenement`, `nomEvenement`, `cout`, `nbMaxJoueur`, `dateEvenement`, `idJeu`) VALUES (NULL, 'Resident Evil', '3.5€', '6', '2020-07-29', '2');
INSERT INTO `evenement` (`idEvenement`, `nomEvenement`, `cout`, `nbMaxJoueur`, `dateEvenement`, `idJeu`) VALUES (NULL, 'kill team saison 1', '4€', '10', '2020-08-05', '4');


/*gaganant*/
INSERT INTO `gagnant` (`idGagnant`, `nomGagnant`, `prenomGagnant`, `idEvenement`) VALUES (NULL, 'CONNOR', 'John', '1');


/*participant*/
INSERT INTO `participant` (`idParticipant`, `nomParticipant`, `prenomParticipant`, `mailParticipant`, `telParticipant`, `idPreference`) VALUES (NULL, 'MAQUINGHEN', 'Mederic', 'maqmed@msn.com', NULL, '1'), 
                                                                                                                                               (NULL, 'CONNOR', 'John', NULL, NULL, '1'),
                                                                                                                                               (NULL, 'TOTO', 'Toto', NULL, NULL, '1'), 
                                                                                                                                               (NULL, 'TATA', 'Tata', NULL, NULL, '1'),
                                                                                                                                               (NULL, 'TITi', 'Titi', NULL, NULL, '1'),
                                                                                                                                               (NULL, 'TUTU', 'Tutu', NULL, NULL, '1'),
                                                                                                                                               (NULL, 'TETE', 'Tete', NULL, NULL, '1'),
                                                                                                                                               (NULL, 'MOMO', 'Momo', NULL, NULL, '2'),
                                                                                                                                               (NULL, 'MAMA', 'Mama', NULL, NULL, '2'),
                                                                                                                                               (NULL, 'MiMi', 'Mimi', NULL, NULL, '2'),
                                                                                                                                               (NULL, 'MUMU', 'Mumu', NULL, NULL, '2'),
                                                                                                                                               (NULL, 'MEME', 'Meme', NULL, NULL, '2'),
                                                                                                                                               (NULL, 'UN', 'Un', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'DEUX', 'Deux', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'TROIS', 'Trois', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'QUATRE', 'Quatre', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'CINQ', 'Cinq', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'SIX', 'Six', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'SEPT', 'Sept', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'HUIT', 'Huit', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'NEUF', 'Neuf', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'DIX', 'Dix', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'ONZE', 'Onze', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'DOUZE', 'Douze', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'TREIZE', 'Treize', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'QUATORZE', 'Quatorze', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'QUINZE', 'Quinze', NULL, NULL, '3'),
                                                                                                                                               (NULL, 'SEIZE', 'Seize', NULL, NULL, '3');


/*participation*/
INSERT INTO `participation` (`idParticipation`, `idParticipant`, `idEvenement`, `prevenu`, `presence`, `reglement`) VALUES (NULL, '1', '1', 'on', NULL, NULL), 
                                                                                                                           (NULL, '2', '1', 'on', NULL, NULL),
                                                                                                                           (NULL, '3', '1', 'on', NULL, NULL),
                                                                                                                           (NULL, '4', '1', 'on', NULL, NULL),
                                                                                                                           (NULL, '5', '1', 'on', NULL, NULL),
                                                                                                                           (NULL, '6', '1', 'on', NULL, NULL),
                                                                                                                           (NULL, '7', '1', 'on', NULL, NULL),
                                                                                                                           (NULL, '8', '1', 'on', NULL, NULL),
                                                                                                                           (NULL, '9', '1', 'on', NULL, NULL);