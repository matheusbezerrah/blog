@extends('templateGeral')

@section('conteudo')

<h1>Administração de Notícias</h1>

@if(old('titulo'))
<div class="alert alert-success">
	A notícia foi inserida com sucesso!
</div>
@endif
<a href="{{action('NoticiaController@novaNoticia')}}" class="btn btn-primary">Novo</a>

<table class="table table-bordered table-hover" style="margin-top: 30px;">
@foreach($noticias as $noticia)
	<tr>
		<th>ID</th>
		<th>Título</th>
		<th>Categoria</th>
		<th>Autor</th>
		<th></th>
		<th></th>
	</tr>
	<tr>
		<td>{{$noticia->id}}</td>
		<td>{{$noticia->titulo}}</td>
		<td>{{$noticia->categoria->descricao}}</td>
		<td>{{$noticia->autor->nome}}</td>
		<td><a href="{{action('NoticiaController@atualizaNoticia', $noticia->id)}}">Editar</a></td>
		<td><a href="{{action('NoticiaController@removeNoticia', $noticia->id)}}">Excluir</a></td>
	</tr>
@endforeach
</table>
@endsection
