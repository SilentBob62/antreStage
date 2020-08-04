#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        idUtilisateur Int  Auto_increment  NOT NULL PRIMARY KEY,
        pseudo        Varchar (50) ,
        mdp           Varchar (50) ,
        role          Int
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jeu
#------------------------------------------------------------

CREATE TABLE jeu(
        idJeu  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomJeu Varchar (50) 
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: evenement
#------------------------------------------------------------

CREATE TABLE evenement(
        idEvenement                 Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomEvenement                Varchar (50) ,
        cout                        Varchar (50) ,
        nbMaxJoueur                 Int ,
        dateEvenement               Date ,
        idJeu                       Int ,
        informationSupplementaire   Varchar (50) 
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: lot
#------------------------------------------------------------

CREATE TABLE lot(
        idLot       Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomLot      Varchar (50) ,
        idEvenement Int
	,CONSTRAINT lot_evenement_FK FOREIGN KEY (idEvenement) REFERENCES evenement(idEvenement)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: preference
#------------------------------------------------------------

CREATE TABLE preference(
        idPreference  Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomPreference Varchar (50) 
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participant
#------------------------------------------------------------

CREATE TABLE participant(
        idParticipant     Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomParticipant    Varchar (50)  ,
        PrenomParticipant Varchar (50)  ,
        mailParticipant   Varchar (50) ,
        telParticipant    Varchar (50) ,
        idPreference      Int 
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gagnant
#------------------------------------------------------------

CREATE TABLE gagnant(
        idGagnant     Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomGagnant    Varchar (50)  ,
        prenomGagnant Varchar (50)  ,
        idEvenement   Int 
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participation
#------------------------------------------------------------

CREATE TABLE participation(
        idParticipation Int  Auto_increment  NOT NULL PRIMARY KEY,
        idEvenement   Int  ,
        idParticipant Int  ,
        prevenu        Varchar (50) ,
        presence       Varchar (50) ,
        reglement      Varchar (50) ,
        info           Varchar (50) 
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: joueur
#------------------------------------------------------------

CREATE TABLE joueur(
        idJoueur Int  Auto_increment  NOT NULL PRIMARY KEY,
        idParticipant  Int ,
        score0         Int ,
        score1         Int ,
        score2         Int ,
        score3         Int ,
        score4         Int ,
        score5         Int ,
        score6         Int ,
        score7         Int ,
        idEvenement    Int ,  
)ENGINE=InnoDB;

ALTER TABLE evenement ADD CONSTRAINT evenement_jeu_FK FOREIGN KEY (idJeu) REFERENCES jeu(idJeu);
ALTER TABLE participation ADD CONSTRAINT participation_participant_FK FOREIGN KEY (idParticipant) REFERENCES participant(idParticipant);
ALTER TABLE participation ADD CONSTRAINT participation_evenement_FK FOREIGN KEY (idEvenement) REFERENCES evenement(idEvenement);
ALTER TABLE participant ADD CONSTRAINT participant_preference_FK FOREIGN KEY (idPreference) REFERENCES preference(idPreference);
ALTER TABLE gagnant ADD CONSTRAINT gagnant_evenement_FK FOREIGN KEY (idEvenement) REFERENCES evenement(idEvenement);
ALTER TABLE lot ADD CONSTRAINT lot_evenement_FK FOREIGN KEY (idEvenement) REFERENCES evenement(idEvenement).
ALTER TABLE joueur ADD CONSTRAINT joueur_participant_FK FOREIGN KEY (idParticipant) REFERENCES participant(idParticipant);
ALTER TABLE joueur ADD CONSTRAINT joueur_evenement_FK FOREIGN KEY (idEvenement) REFERENCES evenement(idEvenement);
