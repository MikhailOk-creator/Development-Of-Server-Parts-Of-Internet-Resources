CREATE DATABASE IF NOT EXISTS appDB default charset utf8;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT, UPDATE, INSERT ON appDB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE appDB;
SET NAMES utf8;
CREATE TABLE IF NOT EXISTS users
(
    id       INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name     VARCHAR(100)    NOT NULL,
    password VARCHAR(100)    NOT NULL,
    role     VARCHAR(10)     NOT NULL
);
CREATE TABLE IF NOT EXISTS products
(
    id          INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name        VARCHAR(100)    NOT NULL,
    volume      VARCHAR(100),
    description VARCHAR(100),
    price       INT             NOT NULL,
    created     DATETIME
);


INSERT INTO users (name, password, role)
VALUES ('Mikhail', '123456', 'admin'),
       ('test_user1', '123', 'user'),
       ('test_user2', '456', 'user'),
       ('test_user3', '789', 'user');

INSERT INTO products (name, price)
VALUES
    ('Дверь входная', 17490),
    ('Светильник светодиодный', 749),
    ('Шпаклевка полимерная', 632),
    ('Мембрана звукоизоляционная', 1719);