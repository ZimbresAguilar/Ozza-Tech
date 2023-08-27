use ozzatech;

create table produtos(
	idProdutos int not null auto_increment,
    nome varchar(250) not null,
    preco decimal(15,2) not null,
    promocao decimal(15,2) not null,
    marca varchar(200) not null,
    cor varchar(50) not null,
    condicao varchar(100) not null,
    origem boolean not null,
    localizacao varchar(50) not null,
    quantidade int not null,
    imagem varchar(150) not null,
    primary key(idProdutos)
);

create table clientes(
	idClientes int not null auto_increment,
    nome varchar(50) not null,
    sobrenome varchar(100) not null,
    cpf varchar(15) not null,
    rg varchar(15) not null,
    email varchar(200) not null,
    senha varchar(255) not null,
    pessoa boolean not null,
    primary key(idClientes)
);

create table pedidos(
    idPedidos int not null auto_increment,
    quantidade int not null,
    idProduto int not null,
    primary key(idPedidos),
    foreign key(idProduto) references produtos(idProdutos)
);

create table carrinhos(
	idCarrinhos int not null auto_increment,
    idPedido int not null,
    idCliente int not null,
    primary key(idCarrinhos),
    constraint foreign key(idPedido) references pedidos(idPedidos),
    constraint foreign key(idCliente) references clientes(idClientes)
);

create table midias(
	idMidias int not null auto_increment,
    nome varchar(300) not null,
    secao varchar(200) not null,
    ativo boolean not null,
    primary key(idMidias)
);
