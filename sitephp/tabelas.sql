CREATE TABLE tb_clientes(
id_user int auto_increment primary key,
inclusao_user datetime,
nome_user varchar(80),
end_user varchar(80),
bairro_user varchar(40),
email_user varchar(90),
tel_user varchar(25),
cidade_user varchar(80),
estado_user int
);

CREATE TABLE tb_estados(
	Id_estado int auto_increment primary key,
	estado varchar(60),
uf char(3));

CREATE TABLE tb_user(
	Id_user int auto_increment primary key,
	apelido varchar(60),
	senha varchar(20));
