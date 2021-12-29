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
INSERT INTO tb_estados(uf,estado) VALUES(‘AC’,’Acre’);
INSERT INTO tb_estados(uf,estado) VALUES(‘AL’,’Alagoas’);
INSERT INTO tb_estados(uf,estado) VALUES(‘AP’,’Amapá’);
INSERT INTO tb_estados(uf,estado) VALUES(‘AM’,’Amazonas’);
INSERT INTO tb_estados(uf,estado) VALUES(‘BA’,’Bahia’);
INSERT INTO tb_estados(uf,estado) VALUES(‘CE’,’Ceará’);
INSERT INTO tb_estados(uf,estado) VALUES(‘DF’,’Distrito Federal’);
INSERT INTO tb_estados(uf,estado) VALUES(‘ES’,’Espírito Santo’);
INSERT INTO tb_estados(uf,estado) VALUES(‘GO’,’Goiás’);
INSERT INTO tb_estados(uf,estado) VALUES(‘MA’,’Maranhão’);
INSERT INTO tb_estados(uf,estado) VALUES(‘MT’,’Mato Grosso’);
INSERT INTO tb_estados(uf,estado) VALUES(‘MS’,’Mato Grosso do Sul’);
INSERT INTO tb_estados(uf,estado) VALUES(‘MG’,’Minas Gerais’);
INSERT INTO tb_estados(uf,estado) VALUES(‘PA’,’Pará’);
INSERT INTO tb_estados(uf,estado) VALUES(‘PB’,’Paraíba’);
INSERT INTO tb_estados(uf,estado) VALUES(‘PR’,’Paraná’);
INSERT INTO tb_estados(uf,estado) VALUES(‘PE’,’Pernambuco’);
INSERT INTO tb_estados(uf,estado) VALUES(‘PI’,’Piauí’);
INSERT INTO tb_estados(uf,estado) VALUES(‘RN’,’Rio Grande do Norte’);
INSERT INTO tb_estados(uf,estado) VALUES(‘RS’,’Rio Grande do Sul’);
INSERT INTO tb_estados(uf,estado) VALUES(‘RJ’,’Rio de Janeiro’);
INSERT INTO tb_estados(uf,estado) VALUES(‘RO’,’Rondônia’);
INSERT INTO tb_estados(uf,estado) VALUES(‘RR’,’Roraima’);
INSERT INTO tb_estados(uf,estado) VALUES(‘SC’,’Santa Catarina’);
INSERT INTO tb_estados(uf,estado) VALUES(‘SP’,’São Paulo’);
INSERT INTO tb_estados(uf,estado) VALUES(‘SE’,’Sergipe’);
INSERT INTO tb_estados(uf,estado) VALUES(‘TO’,’Tocantins’);

INSERT INTO tb_user(apelido,senha) VALUES(‘imasters’,’php’);
