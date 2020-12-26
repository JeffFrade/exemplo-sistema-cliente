CREATE DATABASE sistema_clientes;
USE sistema_clientes;

CREATE TABLE clientes(
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(70) NOT NULL,
documento CHAR(11) NOT NULL);

INSERT INTO clientes (nome, documento) VALUES ("Fulano", "11111111111");
INSERT INTO clientes (nome, documento) VALUES ("Ciclano", "22222222222");
INSERT INTO clientes (nome, documento) VALUES ("Beltrano", "33333333333");
INSERT INTO clientes (documento, nome) VALUES ("44444444444", "Maria");

SELECT * FROM clientes;
