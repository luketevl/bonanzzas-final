create table custom_empresa(
	id int UNSIGNED primary key AUTO_INCREMENT not null,
	nome_emp varchar(200) not null,
	cpf_emp varchar(14) null,
	cnpj_emp varchar(18) null,
	endereco_emp text null,
	conta_emp varchar(20) null,
	agencia_emp varchar(20) null,
	banco_emp varchar(55) null,
	pais_emp varchar(55) null,
	observacoes_emp text null
);

create table custom_documentos(
	id int UNSIGNED primary key AUTO_INCREMENT not null,
	status_doc char(1) not null,
	id_cli int not null,
	foreign key(id_cli) references customer_entity(id)
);

create table custom_acessos(
	id int UNSIGNED primary key AUTO_INCREMENT not null,
	ip varchar(30) not null,
	data_hora datetime not null,
	navegador varchar(55) null,
);

create table custom_configuracoes(
	id int UNSIGNED primary key AUTO_INCREMENT not null,
	tipo_lado char(1) not null,
);

create table custom_ticket_categoria(
	id int UNSIGNED primary key AUTO_INCREMENT not null,
	nome_ticket_cat varchar(55) not null,
	descricao_ticket_cat text not null,
	valor_ticket_cat double(5,2) not null
);


create table custom_ticket(
	id int UNSIGNED primary key AUTO_INCREMENT not null,
	id_ticket_categoria int not null,
	foreign key(id_ticket_categoria) references custom_ticket_categoria(id),
	status_tick char(1) not null,
	arquivo_tick text null,
	num_cod_tick text null,
	data_doc_tick date null
);

create table custom_ticket_historico(
	id int UNSIGNED primary key AUTO_INCREMENT not null,
	id_ticket int not null,
	foreign key(id_ticket) references custom_ticket(id),
	status_ticket_hist char(1) not null,
	data_criacao_hist datetime not null,
	descricao_ticket_hist text not null
);

create table custom_ajuda(
	id int UNSIGNED primary key AUTO_INCREMENT not null,
	titulo_aju varchar(55) not null,
	data_hora_aju datetime not null,
	conteudo_aju text not null,
	tipo_aju char(1) not null,
	caminho_img_aju text null
);


