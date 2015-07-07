drop database seguranca;
create database seguranca;
use seguranca;
create table usuarios(
	id int(4) not null auto_increment,
	nome varchar(100),
	idade int(2),
	email varchar(200),
	senha varchar(100),
	primary key(id)
);
insert into usuarios (nome, idade, email, senha) values ('Name user', '18', 'email@email.com', '123456');