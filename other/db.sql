DROP DATABASE IF EXISTS Geobadge;
CREATE DATABASE Geobadge;
USE Geobadge;
CREATE TABLE User (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Username varchar(255) NOT NULL,
    Email varchar(255) NOT NULL,
    Password varchar(255) NOT NULL
)engine innodb;
CREATE TABLE Timbratura (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  tipo boolean NOT NULL
)engine innodb;
