-- Habilitar a utilização dos FOREING KEY das tabelas
SET foreign_key_checks = 1;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  login VARCHAR(20) NOT NULL,
  email VARCHAR(255) NULL,
  whatsapp VARCHAR(11) NULL,
  senha VARCHAR(255) NOT NULL DEFAULT '123456',
  token VARCHAR(255) NULL,
  data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  data_ultimo_login TIMESTAMP,
  alterar_senha VARCHAR(1) NOT NULL DEFAULT 's' CHECK (alterar_senha IN ('s', 'n')),
  ativo VARCHAR(1) NOT NULL DEFAULT 's' CHECK (ativo IN ('s', 'n'))
)ENGINE=InnoDB;