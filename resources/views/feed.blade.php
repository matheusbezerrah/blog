@extends('templateGeral')

@section('conteudo')
	<h1>Feed de Notícias</h1>

	@foreach ($noticias as $n)
	<table class="table table-bordered table-hover" style="margin-top: 30px;">
		<tr><th align="left">TÍTULO</th></tr>
		<tr><td> <a href="/feed/noticia/{{$n->id}}" > {{ $n->titulo }} </a> </td></tr>

		<tr><th align="left">CATEGORIA</th></tr>
		<tr><td>{{ $n->categoria->descricao }}</td></tr>

		<tr><th align="left">AUTOR</th></tr>
		<tr><td>{{ $n->autor->nome }}</td></tr>

	</table>
	@endforeach
@endsection