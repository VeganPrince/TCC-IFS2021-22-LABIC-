create table ALUNO(

	id_aluno	serial not null,
	cpf_aluno	char(11) not null,
	status_aluno	bit not null,
	nome_aluno	varchar(255) not null,
	nasc_aluno	date not null,
	email_aluno	varchar(255) not null,
	estado_aluno	varchar(30) not null,
	cidade_aluno	varchar(30) not null,
	bairro_aluno	varchar(50) not null,
	cep_aluno	char(8) not null,
	rua_aluno	varchar(255) not null,
	tipo_aluno	bit not null,
	banco_aluno	varchar(20) not null,
	tipoconta_aluno	bit not null,
	agencia_aluno	varchar(10) not null,
	conta_aluno	varchar(10) not null,
	PRIMARY KEY(id_aluno)
);

create table PROFESSOR(

	id_professor	serial not null,
	status_professor bit not null,
	tipo_professor	bit not null,
	banco_professor	varchar(20),
	tipoconta_professor	varchar(8),
	conta_professor	varchar(10) not null,
	agencia_professor	varchar(10),
	PRIMARY KEY(id_professor)
);

create table PROJETO(

	id_projeto	serial not null ,
	titulo_projeto  varchar(255) not null,
	prog_proj	varchar(100) not null,
	orientador_proj	varchar(100) not null,
	instituicao_proj varchar(100) not null,
	PRIMARY KEY(id_projeto)
);

create table EQUIPE(

	id_equipe	serial not null,
	id_aluno	integer null REFERENCES aluno(id_aluno),
	id_projeto	integer null REFERENCES projeto(id_projeto),
	data_inicio	date not null,
	PRIMARY KEY(id_equipe)
);

create table COMUNICACAO(

	id_comunicacao	serial not null,
	id_aluno	integer null REFERENCES aluno(id_aluno),
	tipo_mensagem	bit not null,
	comunicacao	varchar(1000) not null,
	PRIMARY KEY(id_comunicacao)
);

create table RELATORIO(

	id_relatorio	serial not null,
	id_aluno 	integer null REFERENCES aluno(id_aluno),
	tipo_relatorio	bit not null,
	relatorio	varchar(1000) not null,
	PRIMARY KEY(id_relatorio)
);