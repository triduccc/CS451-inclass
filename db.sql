CREATE USER 'socialuser'@'localhost' IDENTIFIED BY 'socialpass';

GRANT ALL PRIVILEGES ON socialnet.* TO 'socialuser'@'localhost';

FLUSH PRIVILEGES;

CREATE DATABASE socialnet;

USE socialnet;

CREATE TABLE account (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    fullname VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    description TEXT
);


