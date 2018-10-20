<!DOCTYPE html>
<html>
<head>
	<title>Feed de Notícias</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<h1>Feed de Notícias</h1>
	<?php foreach ($noticias as $n): ?>
	<table class="table-bordered table-hover" style="margin-top: 60px;">
		<tr><th align="left">TÍTULO</th></tr>
		<tr><td> <a href="feed/noticia?id=<?=$n->id;?>" > <?= $n->titulo; ?> </a> </td></tr>

<!-- 
		<tr><th align="left">CONTEÚDO</th></tr>
		<tr><td><?= $n->conteudo ?></td></tr>

		<tr><th align="left">PALAVRAS CHAVE</th></tr>
		<tr><td><?= $n->palavras_chave ?></td></tr>
 -->
		<tr><th align="left">CATEGORIA</th></tr>
		<tr><td><?= $n->id_categoria ?></td></tr>

		<tr><th align="left">AUTOR</th></tr>
		<tr><td><?= $n->id_autor ?></td></tr>
	</table>
	<?php endforeach ?>
</body>
</html>