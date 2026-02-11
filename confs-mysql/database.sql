CREATE DATABASE vida_dos_bichos;
CREATE USER 'vidabichos'@'%' IDENTIFIED BY '123456';
GRANT ALL PRIVILEGES ON vida_dos_bichos.* TO 'vidabichos'@'%';
FLUSH PRIVILEGES;
EXIT;

CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100)
);


CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    preco DECIMAL(10,2),
    categoria_id INT,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

