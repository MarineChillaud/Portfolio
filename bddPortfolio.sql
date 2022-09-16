-- Création de la bdd

CREATE DATABASE MarinePortfolio;

-- Utilisation de la bdd

USE MarinePortfolio;

-- Table Roles

DROP TABLE IF EXISTS roles;
CREATE TABLE IF NOT EXISTS roles (
    roleId tinyint NOT NULL AUTO_INCREMENT,
    roleName varchar(255) NOT NULL,
    roleColor varchar(7) NOT NULL DEFAULT"#f5f6fa",
    PRIMARY KEY(roleId)
);

-- Table Utilisateurs

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
    userId int(11) NOT NULL AUTO_INCREMENT,
    userName varchar(255) NOT NULL,
    UserPassword varchar(255) NOT NULL,
    roleId tinyint NOT NULL,
    PRIMARY KEY (userId),
    FOREIGN KEY (roleId) REFERENCES roles(roleId)
);

-- Table Clients

DROP TABLE IF EXISTS clients;
CREATE TABLE IF NOT EXISTS clients (
    clientId tinyint NOT NULL AUTO_INCREMENT,
    clientName varchar(255) NOT NULL,
    clientDescription varchar(255) NOT NULL,
    active tinyint NOT NULL DEFAULT '1',
    userId int(11) NOT NULL,
    PRIMARY KEY (clientId),
    FOREIGN KEY (userId) REFERENCES users(userId)
);

-- Table Projets

DROP TABLE IF EXISTS projects;
CREATE TABLE IF NOT EXISTS projects (
    projectId int(11) NOT NULL AUTO_INCREMENT,
    title varchar(255) NOT NULL,
    projectDescription text NOT NULL,
    dot text NOT NULL,
    conclude text NOT NULL,
    img1 varchar(255) NOT NULL,
    img2 varchar(255) NOT NULL,
    img3 varchar(255) NOT NULL,
    vid text,
    website text,
    userId int(11) NOT NULL,
    PRIMARY KEY (projectId),
    FOREIGN KEY (userId) REFERENCES users(userId)
);
