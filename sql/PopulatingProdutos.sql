use ozzatech;

insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Mouse Gamer X", 355.99, 0.10, "Logitech", "Preto", "Novo", false, "SP", 3000, "mouse-preto.jpg");
insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Mouse Gamer Y", 185.99, 0.15, "Positivo", "Cinza", "Usado", true, "MG", 1000, "mouse-cinza.webp");
insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Mouse Gamer Z", 295.99, 0.00, "Lenovo", "Branco", "Redirecionado", false, "RJ", 5000, "mouse-branco.jpg");

insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Teclado Gamer X", 455.99, 0.05, "Logitech", "Preto", "Novo", false, "SP", 3000, "teclado-preto.png");
insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Teclado Gamer Y", 235.99, 0.00, "Lenovo", "Cinza", "Usado", true, "MG", 1500, "teclado-cinza.webp");
insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Teclado Gamer Z", 377.99, 0.15, "Positivo", "Branco", "Redirecionado", false, "RJ", 2700, "teclado-branco.webp");

insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Monitor Gamer X", 1855.99, 0.40, "Logitech", "Preto", "Novo", false, "SP", 3000, "monitor-logitech.jpg");
<<<<<<< HEAD
insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Monitor Gamer Y", 1235.99, 0.00, "Lenovo", "Cinza", "Usado", true, "MG", 1500, "monitor-lenovo.webp");
insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Monitor Gamer Z", 1677.99, 0.10, "Positivo", "Branco", "Redirecionado", false, "RJ", 2700, "monitor-positivo.webp");

insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Gabinete Gamer X", 455.99, 0.00, "Logitech", "Preto", "Novo", false, "SP", 3000, "gabinete-logitech.webp");
insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Gabinete Gamer Y", 135.99, 0.00, "Lenovo", "Cinza", "Usado", true, "MG", 1500, "gabinete-lenovo.webp");
insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Gabinete Gamer Z", 477.99, 0.20, "Positivo", "Branco", "Redirecionado", false, "RJ", 2700, "gabinete-positivo.png");
=======
insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("monitor Gamer Y", 1235.99, 0.00, "Lenovo", "Cinza", "Usado", true, "MG", 1500, "monitor-lenovo.webp");
insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Monitor Gamer Z", 1677.99, 0.10, "Positivo", "Branco", "Redirecionado", false, "RJ", 2700, "monitor-positivo.webp");

insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Gabinete Gamer X", 455.99, 0.00, "Logitech", "Preto", "Novo", false, "SP", 3000, "gabinete-logitech.webp");
insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Gabinente Gamer Y", 135.99, 0.00, "Lenovo", "Cinza", "Usado", true, "MG", 1500, "gabinete-lenovo.webp");
insert into produtos(nome, preco, promocao, marca, cor, condicao, origem, localizacao, quantidade, imagem) values ("Gabinete Gamer Z", 477.99, 0.20, "Positivo", "Branco", "Redirecionado", false, "RJ", 2700, "gabinete-positivo.webp");
>>>>>>> 126ed04d4cd507cd27a4bf3002c1358c1646ffd3


/*Atualizar valor incorreto do índice 11 e 12*/
UPDATE produtos SET nome = "Gabinete Gamer Y" WHERE idProdutos = 11;
UPDATE produtos SET imagem = "gabinete-positivo.png" WHERE idProdutos = 12;