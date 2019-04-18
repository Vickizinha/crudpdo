use crudvick;
create table cliente(
	id int not null auto_increment primary key,
    nome varchar(80) not null,
    dataNasc varchar(10) not null,
    endereco varchar(70) not null
);