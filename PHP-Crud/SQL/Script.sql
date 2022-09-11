-- Criando Banco de Dados
create database banco_teste;

-- Selecionado Banco de Dados
use banco_teste;

-- Criação de Tabela [Teste]
create table cadastro
( id int auto_increment primary key,
  nome varchar(50) not null,
  sobrenome varchar (50) not null,
  sexo char(1) not null
);

-- Criando Usuário específico
create user 'user'@'%' identified by '12345';

-- Permissão ao usuároio 'user' banco_teste
grant all privileges on banco_teste.* to user@'%' identified by '12345';

-- Atualizando privilégios
flush privileges;
