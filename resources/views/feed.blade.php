@extends('templateGeral')

@section('conteudo')
	<h1>Feed de Notícias</h1>
	@if(old('titulo'))
	<div class="alert alert-success">
		A notícia foi inserida com sucesso!
	</div>
	@endif
	@foreach ($noticias as $n)
	<table class="table-bordered table-hover" style="margin-top: 30px;">
		<tr><th align="left">TÍTULO</th></tr>
		<tr><td> <a href="/feed/noticia/{{$n->id}}" > {{ $n->titulo }} </a> </td></tr>

		<tr><th align="left">CATEGORIA</th></tr>
		<tr><td>{{ $n->id_categoria }}</td></tr>

		<tr><th align="left">AUTOR</th></tr>
		<tr><td>{{ $n->id_autor }}</td></tr>
	</table>
	@endforeach
@endsection