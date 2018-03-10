SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE user (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nom varchar(30) NOT NULL,
  Prenom varchar(30) NOT NULL,
  Mdp varchar(50) NOT NULL,
  Email varchar(50) NOT NULL,
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE item (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  IdUser INTEGER,
  Nom varchar(50) NOT NULL,
  Quantite int(10) DEFAULT 1,
  Poids int(255),
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE sort (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  IdUser INTEGER,
  Nom varchar(10) NOT NULL,
  Description text(256) NOT NULL,
  PM int(50) NOT NULL,
  Degat int(50),
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE arme (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  IdUser INTEGER,
  Nom varchar(10) NOT NULL,
  Description text(256) NOT NULL,
  DegatDes int(50),
  DegatPrimaire int(50),
  effet text(256),
  Poids int(255),
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE armure (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  IdUser INTEGER,
  Nom varchar(10) NOT NULL,
  Description text(256) NOT NULL,
  Bouclier int(50),
  effet text(256),
  Poids int(255),
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE inventaire (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  IdArmeCac INTEGER,
  IdArmeDist INTEGER,
  IdCasque INTEGER,
  IdArmure INTEGER,
  IdBouclier INTEGER,
  Poids int(255),
  IdSort1 INTEGER,
  IdSort2 INTEGER,
  IdSort3 INTEGER,
  IdSort4 INTEGER,
  IdSort5 INTEGER,
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE personnage (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  IdUser INTEGER,
  Nom varchar(30) NOT NULL,
  Prenom varchar(30) NOT NULL,
  Pseudo varchar(30),
  Race varchar(30),
  Classe varchar(30),
  Niveau int(255),
  Experience int(255),
  PV int(50),
  PM int(50),
  Puissance int(100),
  Finnesse int(100),
  Social int(100),
  Mental int(100),
  Argent int(255),
  IdInventaire INTEGER,
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE Familier (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  IdUser INTEGER,
  Nom varchar(30) NOT NULL,
  Prenom varchar(30) NOT NULL,
  Pseudo varchar(30),
  Race varchar(30),
  Classe varchar(30),
  Niveau int(255),
  Experience int(255),
  PV int(50),
  PM int(50),
  Puissance int(100),
  Finnesse int(100),
  Social int(100),
  Mental int(100),
  IdPerso INTEGER,
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE Invocation (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  IdUser INTEGER,
  Nom varchar(30) NOT NULL,
  Prenom varchar(30) NOT NULL,
  Pseudo varchar(30),
  Race varchar(30),
  Classe varchar(30),
  Niveau int(255),
  Experience int(255),
  PV int(50),
  PM int(50),
  Puissance int(100),
  Finnesse int(100),
  Social int(100),
  Mental int(100),
  IdPerso INTEGER,
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE mob (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  IdUser INTEGER,
  Nom varchar(30) NOT NULL,
  Prenom varchar(30) NOT NULL,
  Pseudo varchar(30),
  Race varchar(30),
  Classe varchar(30),
  Niveau int(255),
  Experience int(255),
  PV int(50),
  PM int(50),
  Puissance int(100),
  Finnesse int(100),
  Social int(100),
  Mental int(100),
  IdInventaire INTEGER,
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE Niveau (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Niveau int(255) NOT NULL,
  Exeprience int(255) NOT NULL,
  Jeu Varchar(30),
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
