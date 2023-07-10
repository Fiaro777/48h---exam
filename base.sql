-- Active: 1688993187804@@127.0.0.1@3306@site_regime
create database site_regime;
Use site_regime;
create table admin(
   idAdmin int primary key auto_increment,
   email Varchar(100),
   password Varchar(100),
   username Varchar(100)
);

create table user(
    idUser int primary key auto_increment,
     email Varchar(100),
     password Varchar(100),
     username Varchar(100),
     genre Varchar(100),
     poids int,
     taille double,
     etatRegime VARCHAR(10) 
);

create table plat(
    idPlat int primary key auto_increment,
    nomPlat Varchar(100),
    typeRegime VARCHAR(10)
);

create table sport(
    idSport int primary key auto_increment,
    nomSport Varchar(100),
    typeRegime VARCHAR(10),
    dureeSport INT
);

create table regime(
    idRegime int PRIMARY key auto_increment,
    idUser int ,
    typeRegime VARCHAR(10),
    idPlat int ,
    idSport int ,
    dureeRegime int,
    minPoids int,
    maxPoids int,
    prixRegime double

);

create table commande(
    idCommande int PRIMARY key auto_increment,
    idUser int,
    regime Varchar(100),
    prixRegime double,
    dateCommande DATE,
    codecredit VARCHAR(5)
);

create table code(
    idCode  int primary key auto_increment,
    valeurCode VARCHAR(5)
);

CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(40) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        PRIMARY KEY (id),
        KEY `ci_sessions_timestamp` (`timestamp`)
);