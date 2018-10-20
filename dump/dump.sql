create table tbl_categoria (
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
	id_categoria int not null,
	id_autor int not null,
	primary key (id),
	CONSTRAINT FK_NoticiaCategoria FOREIGN KEY (id_categoria) REFERENCES tbl_categoria(id),
	CONSTRAINT FK_NoticiaAutor FOREIGN KEY (id_autor) REFERENCES tbl_autor(id)
);


insert into tbl_autor (nome) values ('Matheus Bezerra');
insert into tbl_autor (nome) values ('João Teixeira');
insert into tbl_autor (nome) values ('Maria da Silva');
insert into tbl_autor (nome) values ('Mário Gomes');
insert into tbl_autor (nome) values ('Ronaldo da Silva');

insert into tbl_categoria (descricao) values ('Futebol');
insert into tbl_categoria (descricao) values ('Política');
insert into tbl_categoria (descricao) values ('Negócios');
insert into tbl_categoria (descricao) values ('Arte e Lazer');

insert into tbl_noticia
(titulo,conteudo,palavras_chave,id_categoria,id_autor)
values
("Após avaliação, médico diz que ida a debate 'depende de Bolsonaro'"
,"Após deixar a casa do candidato Jair Bolsonaro (PSL) nesta quinta-feira (18), o médico cirurgião Antonio Luiz Macedo disse à reportagem que a participação do presidenciável em debates depende dele. \n 'Depende dele por causa da colostomia', afirmou por meio de mensagem. \n Macedo é o responsável pelo acompanhamento médico de Bolsonaro desde que ele foi vítima de uma facada no dia 6 de setembro. \n Ele foi à residência do capitão reformado, na Barra da Tijuca, para uma nova avaliação médica. Ao contrário de visitas anteriores, deixou o local sem falar com jornalistas. \n Como a participação de Bolsonaro em debates aguardava liberação médica, a reportagem questionou Macedo sobre o tema, que respondeu sem dar mais detalhes sobre o que o candidato pode fazer. \n O médico divulgou apenas uma nota à imprensa depois de ter deixado o local, onde passou quase duas horas."
,'BOLSONARO,ELEIÇÕES'
,2,1);

insert into tbl_noticia
(titulo,conteudo,palavras_chave,id_categoria,id_autor)
values
("'Espero concluir o sonho de vocês', destaca Ceni na festa do centenário"
,"A Capital cearense ficou tomada pelas cores vermelho, azul e branco em alusão ao centenário do Fortaleza Esporte Clube, comemorado nesta quinta-feira (18). Com monumentos históricos iluminados, queima de fogos em diversos pontos da cidade e uma programação especial para os torcedores do Leão, o comandante da equipe, Rogério Ceni, não ficou de fora da festa. Ao lado do compositor Raimundo Fagner e do presidente Marcelo Paz, o treinador agradeceu a oportunidade de dirigir o Tricolor neste ano especial. \n "
,'CENTENÁRIO,FUTEBOL,FORTALEZA'
,1,2);