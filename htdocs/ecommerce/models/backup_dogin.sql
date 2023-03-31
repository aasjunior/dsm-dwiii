-- Active: 1680214418997@@127.0.0.1@3306@escola

CREATE DATABASE dogin;

CREATE Table produtos(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    valor_compra DECIMAL(4,2) UNSIGNED NOT NULL,
    valor_venda DECIMAL(4,2) UNSIGNED NOT NULL,
    quantidade INT UNSIGNED NOT NULL,
    disponivel BOOL NOT NULL,
    dt_cadastro TIMESTAMP NOT NULL DEFAULT NOW(),
    img VARCHAR(255) NOT NULL,
    CONSTRAINT pk_produto PRIMARY KEY(id)
);

INSERT INTO produtos(nome, descrIcao, valor_compra, valor_venda, quantidade, disponivel, img) 
VALUES ('Ração para Cães', 'Ração de alta qualidade para cães adultos', 50.00, 89.99, 100, true, "imgs/imagem.jpg"),
       ('Ração para Cães', 'Ração de alta qualidade para cães adultos', 50.00, 89.99, 100, true, "imgs/imagem.jpg"),
       ('Ração para Gatos', 'Ração de alta qualidade para gatos adultos', 45.00, 79.99, 80, true, "imgs/imagem.jpg"),
       ('Coleira para Cães', 'Coleira ajustável para cães de porte médio', 10.00, 25.99, 50, true, "imgs/imagem.jpg"),
       ('Brinquedo para Gatos', 'Varinha com penas para gatos brincarem', 8.00, 12.99, 60, true, "imgs/imagem.jpg"),
       ('Shampoo para Cães', 'Shampoo de limpeza suave para cães com pele sensível', 25.00, 35.99, 40, true, "imgs/imagem.jpg"),
       ('Caixa de Transporte para Gatos', 'Caixa resistente para transportar gatos', 120.00, 149.99, 20, true, "imgs/imagem.jpg"),
       ('Areia para Gatos', 'Areia de sílica para gatos', 30.00, 45.99, 30, true, "imgs/imagem.jpg"),
       ('Tapete Higiênico para Cães', 'Tapete higiênico descartável para cães', 12.00, 19.99, 70, true, "imgs/imagem.jpg"),
       ('Escova para Gatos', 'Escova de cerdas macias para gatos', 6.00, 15.99, 40, true, "imgs/imagem.jpg"),
       ('Ossinho para Cães', 'Ossinho sabor frango para cães', 1.50, 4.99, 200, true, "imgs/imagem.jpg");

SELECT * FROM produtos LIMIT 3, 6;