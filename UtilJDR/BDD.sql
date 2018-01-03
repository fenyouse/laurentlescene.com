SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE item (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nom varchar(50) NOT NULL,
  Quantité int(10) DEFAULT 1,
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE sort (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nom varchar(10) NOT NULL,
  Description text(256) NOT NULL,
  PM int(50) NOT NULL,
  Degat int(50),
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE arme (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nom varchar(10) NOT NULL,
  Description text(256) NOT NULL,
  DegatDes int(50),
  DegatPrimaire int(50),
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE armure (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nom varchar(10) NOT NULL,
  Description text(256) NOT NULL,
  Bouclier int(50),
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE personnage (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nom varchar(30) NOT NULL,
  Prenom varchar(30) NOT NULL,
  Pseudo varchar(30),
  Race varchar(30),
  Classe varchar(30),
  Niveau int(255),
  PV int(50),
  PM int(50),
  PMMax int(50),
  PVMax int(50),
  Puissance int(100),
  Finnesse int(100),
  Social int(100),
  Argent int(255),
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
