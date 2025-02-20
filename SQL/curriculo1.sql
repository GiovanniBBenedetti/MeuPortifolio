create database PortifolioGiovanni;

use PortifolioGiovanni;

create table Curriculo(
id int primary key auto_increment,
Aboutme text not null
);

create table Habilidades(
tecnologia varchar(50) not null,
imagem varchar (90) not null
);



create table projetos(
id int auto_increment primary key,
imagem varchar (90) not null,
titulo varchar(50) not null,
descricao text not null,
deploy text not null,
github text not null  
)