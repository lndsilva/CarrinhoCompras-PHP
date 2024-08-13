drop database dbProdutos;

create database dbProdutos;

use dbProdutos;

create table tbProdutos(
codProd int unsigned not null auto_increment,
nome varchar(200),
valor decimal(9,2),
quantidade int unsigned null,
primary key(codProd));

insert into tbProdutos(nome,valor,quantidade)
	values('Telefone sem fio',65.50,3);
insert into tbProdutos(nome,valor,quantidade)
	values('Celular',129.50,2);
insert into tbProdutos(nome,valor,quantidade)
	values('Notebook',1399.00,1);