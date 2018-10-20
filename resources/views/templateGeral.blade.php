<!DOCTYPE html>
<html>
<head>
	<title> Feed de Notícias </title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
  <div class="container">

  	<ul class="nav nav-pills navbar-right">
	  <li><a href="{{action('NoticiaController@listaFeedNoticias')}}">Feed</a></li>
	  <li ><a href="{{action('NoticiaController@novaNoticia')}}">Novo</a></li>
	</ul>

    @yield('conteudo')

  </div>
</body>
</html>