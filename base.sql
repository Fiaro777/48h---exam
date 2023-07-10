-- Active: 1681575766731@@127.0.0.1@3306@bongbong
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

insert into user values(1,'root@gmail.com','root','Nambinina','masculin',60,1.70,'nnh');

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