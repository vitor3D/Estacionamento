CREATE TABLE clientes (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  data_nascimento DATE NOT NULL,
  tipo_vaga VARCHAR(20) NOT NULL,
  data_inicio DATE NOT NULL,
  data_fim DATE NOT NULL,
  nome_empresa VARCHAR(50) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE vagas_individuais (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  data_nascimento DATE NOT NULL,
  tipo_vaga VARCHAR(20) NOT NULL,
  data_inicio DATE NOT NULL,
  data_fim DATE NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE vagas_conveniados (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  data_nascimento DATE NOT NULL,
  tipo_vaga VARCHAR(20) NOT NULL,
  data_inicio DATE NOT NULL,
  data_fim DATE NOT NULL,
  nome_empresa VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE vagas_mensais (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  data_nascimento DATE NOT NULL,
  tipo_vaga VARCHAR(20) NOT NULL,
  data_inicio DATE NOT NULL,
  data_fim DATE NOT NULL,
  valor DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (id)
);
