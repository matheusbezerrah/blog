@extends('templateGeral')
@section('conteudo')

<h1>Cadastro de Notícia</h1>
<form action="/noticia/adiciona" method="post">

	<input type="hidden" name="_token" value="{{{csrf_token()}}}">

	<div class="form-group">
		<label>Título</label>
		<input class="form-control" type="text" name="titulo"/>
	</div>
	<div class="form-group">
		<label>Conteúdo</label>
		<textarea class="form-control" rows="10" name="conteudo"></textarea>
	</div>
	<div class="form-group">
		<label>Categoria</label>
		<input class="form-control" type="text" name="categoria"/>
	</div>
	<div class="form-group">
		<label>Autor</label>
		<input class="form-control" type="text" name="autor"/>
	</div>
	<div class="form-group">
		<label>Palavras-Chave</label>
		<input class="form-control" type="text" name="palavras-chave"/>
	</div>

	<button type="submit" class="btn btn-primary">Adicionar</button>
</form>

@endsection