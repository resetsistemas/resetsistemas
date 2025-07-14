-- Habilitar a utilização dos FOREING KEY das tabelas
SET
  foreign_key_checks = 1;

CREATE TABLE status_ativo (
  cod INT AUTO_INCREMENT PRIMARY KEY,
  nome_status VARCHAR(3) NOT NULL,
  sigla_status VARCHAR(1) NOT NULL UNIQUE,
  CONSTRAINT chk_status_ativo CHECK (sigla_status IN ('s', 'n'))
) ENGINE = InnoDB;

INSERT INTO
  status_ativo (nome_status, sigla_status)
VALUES
  ('Sim', 's'),
  ('Não', 'n');

CREATE TABLE contatos (
  cod INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(60) NOT NULL,
  empresa VARCHAR(60) NOT NULL,
  email VARCHAR(60) NOT NULL,
  whatsapp VARCHAR(11) NOT NULL,
  mensagem VARCHAR(255) NOT NULL,
  data_cadastro TIMESTAMP DEFAULT (CURRENT_TIMESTAMP - INTERVAL 3 HOUR) ON UPDATE CURRENT_TIMESTAMP,
  ativo VARCHAR(1) NOT NULL DEFAULT 's',
  FOREIGN KEY (ativo) REFERENCES status_ativo (sigla_status)
) ENGINE = InnoDB;

CREATE TABLE usuarios (
  cod INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  login VARCHAR(20) NOT NULL,
  email VARCHAR(255) NULL,
  whatsapp VARCHAR(11) NULL,
  senha VARCHAR(255) NOT NULL DEFAULT '123456',
  data_cadastro TIMESTAMP DEFAULT (CURRENT_TIMESTAMP - INTERVAL 3 HOUR) ON UPDATE CURRENT_TIMESTAMP,
  alterar_senha VARCHAR(1) NOT NULL DEFAULT 's',
  ativo VARCHAR(1) NOT NULL DEFAULT 's',
  FOREIGN KEY (alterar_senha) REFERENCES status_ativo (sigla_status),
  FOREIGN KEY (ativo) REFERENCES status_ativo (sigla_status)
) ENGINE = InnoDB;

CREATE TABLE controle_login (
  cod INT AUTO_INCREMENT PRIMARY KEY,
  cod_usuario INT NOT NULL UNIQUE,
  token VARCHAR(32) NOT NULL UNIQUE,
  ultimo_login TIMESTAMP DEFAULT (CURRENT_TIMESTAMP - INTERVAL 3 HOUR) ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (cod_usuario) REFERENCES usuarios(cod)
) ENGINE = InnoDB;