@extends('templateGeral')

<title>{{$noticia->titulo}} - {{$noticia->id_categoria}}</title>

@section('conteudo')
	<h1>Notícia</h1>
	<h3><?= $noticia->titulo ?></h3>
	<table class="table-bordered table-hover" style="margin-top: 30px;">
		
		<tr><th align="left">CONTEÚDO</th></tr>
		<tr><td>{{ $noticia->conteudo }}</td></tr>

		<tr><th align="left">PALAVRAS CHAVE</th></tr>
		<tr><td>{{ $noticia->palavras_chave }}</td></tr>

		<tr><th align="left">CATEGORIA</th></tr>
		<tr><td>{{ $noticia->id_categoria }}</td></tr>

		<tr><th align="left">AUTOR</th></tr>
		<tr><td>{{ $noticia->id_autor }}</td></tr>
	</table>
@endsection