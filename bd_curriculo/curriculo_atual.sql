

CREATE TABLE perfil(
	id_perfil INT AUTO_INCREMENT,	
	descricao_perfil VARCHAR(100),
	PRIMARY KEY(id_perfil)

)ENGINE INNODB;

CREATE TABLE usuario(
	id_usuario INT AUTO_INCREMENT,	
	id_perfil INT,	
	email VARCHAR(100),	
	senha VARCHAR(100),	
	data_matricula date now(),
	FOREIGN KEY(id_perfil)	
	REFERENCES perfil(id_perfil),	
	PRIMARY KEY(id_usuario)	

)ENGINE INNODB;

CREATE TABLE curriculo(
	id_curriculo INT AUTO_INCREMENT,	
	id_usuario INT,	
	nome VARCHAR(100),	
	email VARCHAR(100),
	sexo VARCHAR(18),	
	data_nascimento DATE,	
	telefone VARCHAR(12),			
	cep VARCHAR(12)NOT NULL, 	
	rua VARCHAR(100)	,
	numero_residencia VARCHAR(100),	
	bairro VARCHAR(100),	
	cidade VARCHAR(100),	
	uf CHAR(2),
	estado_civil VARCHAR(12),	
	objetivo VARCHAR(100),	
	ensino_fundamental VARCHAR(100),
	serie_fundamental VARCHAR(20),
	ensinoMedio_instituicao VARCHAR(100),	
	serie_ensinoMedio VARCHAR(20),
	ano_conclusao_ensinoMedio DATE,
	curso_tecnicoNome VARCHAR(100),
	tecnico_instituicao VARCHAR(80),
	ano_conclusao_tecnico DATE,
	curso_superiorNome VARCHAR(100),
	instituicao_superior VARCHAR(100),
	ano_conclusao_superior DATE,		
	exper_profissional_dataInicio DATE,	
	exper_profissional_dataFim DATE,	
	funcao VARCHAR(50),	
	remuneracao VARCHAR(30),	
	meses_exper_profissional VARCHAR(40),	
	empresa VARCHAR(50),	
	descricao_funcao VARCHAR(100),	
	ano_conclusao_atividadeComplementar DATE,	
	instituicao_atividadeComplementar VARCHAR(100),
	remuneracao_atividadeComplementar VARCHAR(20),
	descricao_atividadeComplementar VARCHAR(100),		
	carga_horaria_atividadeComplementar VARCHAR(20),
	necessidade_especial VARCHAR(50),
	descricao_deficiencia VARCHAR(100),
	cid_deficiencia varchar(10),
	descricao_acessibilidade VARCHAR(100),	
	FOREIGN KEY(id_usuario)	
	REFERENCES usuario(id_usuario),	
	PRIMARY KEY(id_curriculo)	
)ENGINE INNODB;



