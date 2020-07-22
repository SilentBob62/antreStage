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
        nomJeu Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: evenement
#------------------------------------------------------------

CREATE TABLE evenement(
        idEvenement   Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomEvenement  Varchar (50) NOT NULL ,
        cout          Int ,
        nbMaxJoueur   Int ,
        dateEvenement Date ,
        idJeu         Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: lot
#------------------------------------------------------------

CREATE TABLE lot(
        idLot       Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomLot      Varchar (50) NOT NULL ,
        idEvenement Int NOT NULL
	,CONSTRAINT lot_evenement_FK FOREIGN KEY (idEvenement) REFERENCES evenement(idEvenement)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: preference
#------------------------------------------------------------

CREATE TABLE preference(
        idPreference  Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomPreference Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participant
#------------------------------------------------------------

CREATE TABLE participant(
        idParticipant     Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomParticipant    Varchar (50) NOT NULL ,
        PrenomParticipant Varchar (50) NOT NULL ,
        mailParticipant   Varchar (50) ,
        telParticipant    Varchar (50) ,
        idPreference      Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gagnant
#------------------------------------------------------------

CREATE TABLE gagnant(
        idGagnant     Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomGagnant    Varchar (50) NOT NULL ,
        prenomGagnant Varchar (50) NOT NULL ,
        idEvenement   Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participe
#------------------------------------------------------------

CREATE TABLE participation(
        idParticipation Int  Auto_increment  NOT NULL PRIMARY KEY,
        idEvenement   Int NOT NULL ,
        idParticipant Int NOT NULL ,
        prevenu        Varchar (50) ,
        presence       Varchar (50) ,
        reglement      Varchar (50)
)ENGINE=InnoDB;

ALTER TABLE evenement ADD CONSTRAINT evenement_jeu_FK FOREIGN KEY (idJeu) REFERENCES jeu(idJeu);
ALTER TABLE participation ADD CONSTRAINT participation_participant_FK FOREIGN KEY (idParticipant) REFERENCES participant(idParticipant);
ALTER TABLE participation ADD CONSTRAINT participation_evenement_FK FOREIGN KEY (idEvenement) REFERENCES evenement(idEvenement);
ALTER TABLE participant ADD CONSTRAINT participant_preference_FK FOREIGN KEY (idPreference) REFERENCES preference(idPreference);
ALTER TABLE gagnant ADD CONSTRAINT gagnant_evenement_FK FOREIGN KEY (idEvenement) REFERENCES evenement(idEvenement);
ALTER TABLE lot ADD CONSTRAINT lot_evenement_FK FOREIGN KEY (idEvenement) REFERENCES evenement(idEvenement)