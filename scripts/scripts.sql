create table tbl_noticia_categoria (
	id int not null auto_increment,
	descricao varchar(150) not null,
	primary key(id)
);

create table tbl_autor (
	id int not null auto_increment,
	nome varchar(150) not null,
	primary key (id)
);

create table tbl_noticia (
	id int not null auto_increment,
	titulo varchar(150) not null,
	conteudo varchar(30000) not null,
	palavras_chave varchar(255),
	id_categoria int(10) not null,
	id autor int(10) not null,
	primary key (id),
	foreign key (id_categoria) references tbl_noticia_categoria(id),
	foreign key (autor) references tbl_autor(id)
);