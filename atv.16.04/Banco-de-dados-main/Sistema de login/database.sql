CREATE DATABASE IF NOT EXISTS login_db;
USE login_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR (50) NOT NULL UNIQUE,
    password VARCHAR (255) NOT NULL
);

INSERT INTO users (username, password) VALUES 
('colla', '123'),
('larissa', '123'),
('mari', '123'),
('schneider', '123'),
('odeir', '123'),
('pandora', '123');