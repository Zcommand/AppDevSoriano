CREATE DATABASE IF NOT EXISTS tsa3_db;

USE tsa3_db;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    firstname varchar(50) NOT NULL,
    middlename varchar(50) NOT NULL,
    lastname varchar(50) NOT NULL,
    username varchar(50) NOT NULL,
    password varchar(100) NOT NULL,
    birthday varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    contact_number varchar(20) NOT NULL,
    date_created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);
