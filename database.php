<?php

try {
  $conn = new PDO("sqlite:". __DIR__ ."/database.db");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Conectado ao banco de dados";


// CRIAÇÃO DO BANCO DE DADOS
<<<<<<< HEAD
// 

// $sql = 'CREATE TABLE cliente (
//   id_cliente INTEGER PRIMARY KEY AUTOINCREMENT,
//   admin int,
//   nome char(100),
//   rg char(20),
//   cpf char(20),
//   dataNasc date,
//   email char(100),
//   cep int,
//   rua char(100),
//   numero int,
//   bairro char(100),
//   cidade char(100),
//   uf char(2),
//   senha char(100)
// );';

// $sql1 = "INSERT INTO  cliente (admin, nome, rg, cpf, dataNasc, email, cep, rua, numero, bairro, cidade, uf, senha) 
// VALUES (1, 'admin', 'admin', 'admin', '00000000', 'admin@admin.com', 0, 'admin', 0, 'admin', 'admin', 'ad', '123');";

// $sql2 = 'CREATE TABLE sala (
//   id_sala INTEGER PRIMARY KEY,
//   horario_disp1 datetime,
//   horario_disp2 datetime,
//   horario_disp3 datetime,
//   valor_ensaio int,
//   valor_gravacao int
// );

// CREATE TABLE agenda (
//   id_agenda INTEGER PRIMARY KEY AUTOINCREMENT,
//   cpf char(20),
//   id_sala INTEGER,
//   data date,
//   horario datetime,
//   tipo char(20),
//   valor int,
//   forma_pag char(100),
//   CONSTRAINT fk_cpf
//     FOREIGN KEY (cpf)
//     REFERENCES cliente (cpf)
//   CONSTRAINT fk_sala_id
//     FOREIGN KEY (id_sala)
//     REFERENCES sala (id_sala)
// );

// CREATE TABLE equipamento (
//   id_equipamento INTEGER PRIMARY KEY AUTOINCREMENT,
//   nome char(100),
//   marca char(100),
//   modelo char(100),
//   tipo char(100),
//   id_sala INTEGER,
//   CONSTRAINT fk_sala_id
//     FOREIGN KEY (id_sala)
//     REFERENCES sala (id_sala)
// );';

// $conn->exec($sql);
// $conn->exec($sql1);
// $conn->exec($sql2);

// 
// INSERT INTO  cliente (admin, nome, senha) VALUES (1, 'admin', 'admin');
// 

=======
/*
$sql = 'CREATE TABLE user (
  id_user INTEGER PRIMARY KEY AUTOINCREMENT,
  user char(100),
  senha char(100)
);';

$sql1 = "INSERT INTO  user (user, senha)
VALUES ('Gustavo', '1234');";

$conn->exec($sql);
$conn->exec($sql1);


$sql3 = 'CREATE TABLE empresa (
  id_empresa INTEGER PRIMARY KEY AUTOINCREMENT,
  nome char(100),
  razaosocial char(100),
  cnpj char(100),
  email char(100),
  endereco char(100),
  cep char(100),
  pais char(100),
  estado char(100),
  cidade char(100),
  telefone char(30),
  senha char(100)
);

CREATE TABLE alimento (
  id_alimento INTEGER PRIMARY KEY AUTOINCREMENT,
  nome char(100),
  categoria char(100),
  marca char(50),
  fabricacao date,
  validade date,
  peso char(20),
  id_empresa INTEGER,
  CONSTRAINT fk_empresa_id
    FOREIGN KEY (id_empresa)
    REFERENCES empresa(id_empresa)
);

CREATE TABLE organizacao (
  id_organizacao INTEGER PRIMARY KEY AUTOINCREMENT,
  nome char(100),
  necessidade char(300),
  estado char(50),
  cidade char(50),
  site char(200),
  telefone char(30)
);

CREATE TABLE ordem (
  id_ordem INTEGER PRIMARY KEY AUTOINCREMENT,
  nome char(100),
  qtde int,
  pesototal char(100),
  dataentrega date,
  id_alimento INTEGER,
  id_organizacao INTEGER,
  CONSTRAINT fk_alimento_id
    FOREIGN KEY (id_alimento)
    REFERENCES alimento (id_alimento)
  CONSTRAINT fk_organizacao_id
    FOREIGN KEY (id_organizacao)
    REFERENCES organizacao (id_organizacao)
);';

$sql1 = "INSERT INTO  organizacao (nome, necessidade, estado, cidade, site, telefone)
VALUES ('ONG Um Lugar ao Sol', 'Qualquer', 'Paraná', 'Curitiba', 'https://www.umlugaraosol.ong.br/', '+55 41 98402-4464');

INSERT INTO  organizacao (nome, necessidade, estado, cidade, site, telefone)
VALUES ('ONG Nação Brasil', 'Qualquer', 'Paraná', 'Curitiba', 'https://www.ongnacaobrasil.com.br/', '+55 41 3024-5819');

INSERT INTO  organizacao (nome, necessidade, estado, cidade, site, telefone)
VALUES ('ONG COMSOL', 'Qualquer', 'Paraná', 'Curitiba', 'https://www.comsol.org.br/', '+55 41 3698-0214');";

$sql2 = "INSERT INTO  empresa (razaosocial, cnpj, senha)
VALUES ('admin', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');";

$sql3 = "INSERT INTO  alimento (nome, categoria, marca, fabricacao, validade, peso)
VALUES ('Cereal', 'Mercearia', 'Nescau', '2020-11-18', '2021-12-20', '0.5');";

$sql4 = "INSERT INTO  ordem (nome, qtde, pesototal, dataentrega)
VALUES ('Cereal', '50', '25', '2021-11-25');";

$conn->exec($sql);
$conn->exec($sql1);
$conn->exec($sql2);
$conn->exec($sql3);
$conn->exec($sql4);
*/

<<<<<<< HEAD
=======
// $sql1 = "INSERT INTO  user (user, senha)
// VALUES ('Lucas', '1234');";
// $conn->exec($sql1);

 
>>>>>>> 38b89262071a71f3c6728662dbac4a9287bd1b62
>>>>>>> 7a09ffd7a6c55254e507bb1f1206621377ee4001
} catch(PDOException $e) {  
  echo "Falha ao conectar: " . $e->getMessage();
  // phpinfo();
}