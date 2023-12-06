CREATE DATABASE photography;
USE photography;

CREATE TABLE users(
    id INT(250) AUTO_INCREMENT PRIMARY KEY not null,
    name VARCHAR (250) not null,
    email VARCHAR (250) NOT NULL,
    number VARCHAR (250) NOT NULL
);