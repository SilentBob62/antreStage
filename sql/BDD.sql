#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE database antre;
use antre;

#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        idUtilisateur Int  Auto_increment  NOT NULL PRIMARY KEY ,
        pseudo        Varchar (50) ,
        mdp           Varchar (50) ,
        role          Int
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jeu
#------------------------------------------------------------

CREATE TABLE jeu(
        idJeu  Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomJeu Varchar (50)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: evenement
#------------------------------------------------------------

CREATE TABLE evenement(
        idEvenement   Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomEvenement  Varchar (50) ,
        cout          Varchar (50) ,
        nbMaxJoueur   Int ,
        dateEvenement Date ,
        idJeu         Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participant
#------------------------------------------------------------

CREATE TABLE participant(
        idParticipant     Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomParticipant    Varchar (50) ,
        prenomParticipant Varchar (50) ,
        mailParticipant   Varchar (50) ,
        telParticipant    Varchar (50)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participation
#------------------------------------------------------------

CREATE TABLE participation(
        idParticipation Int NOT NULL PRIMARY KEY ,
        idParticipant   Int NOT NULL ,
        idEvenement     Int NOT NULL ,
        prevenu         Varchar (50) ,
        presence        Varchar (50) ,
        reglement       Varchar (50) 
)ENGINE=InnoDB;

ALTER TABLE evenement ADD CONSTRAINT evenement_jeu_FK FOREIGN KEY (idJeu) REFERENCES jeu(idJeu);
ALTER TABLE participation ADD CONSTRAINT participation_participant_FK FOREIGN KEY (idParticipant) REFERENCES participant(idParticipant);
ALTER TABLE participation ADD CONSTRAINT participation_evenement_FK FOREIGN KEY (idEvenement) REFERENCES evenement(idEvenement);