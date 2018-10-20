<?php namespace blog\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use blog\Noticia;
use blog\Autor;
use blog\Categoria;
use blog\Http\Requests\NoticiaRequest;

class NoticiaController extends Controller {

	public function listaFeedNoticias(){

		$noticias = Noticia::all();
		
		return view('feed')->with('noticias', $noticias);
	}

	public function findNoticia($id){
		$noticia = Noticia::find($id);
 
		if(empty($noticia)){
			return 'Esta notícia não está cadastrada ou a URL é inválida. 
					<br> Favor, comunique o administrador.';
		}

		return view('noticia')->with('noticia', $noticia);
	}

	public function novaNoticia(){

		return view('formNoticia')->with(['autores'=>Autor::all(), 'categorias'=>Categoria::all()]);
	}

	public function adicionaNoticia(NoticiaRequest $request){

		$parametros = $request->all();
		$noticia = new Noticia($parametros);

		$noticia->save();	

		return redirect()
				->action('NoticiaController@administrarNoticias')
				->withInput(REQUEST::only('titulo'));
	}

	public function atualizaNoticia($id){

		$noticia = Noticia::find($id);

		return view('formNoticiaEdit')->with(['autores'=>Autor::all(), 'categorias'=>Categoria::all(), 'noticia'=>$noticia]);
	}

	public function atualizaFormNoticia(NoticiaRequest $request){

		$id = $request->input('id');
		$noticia = Noticia::find($id);

		$noticia->titulo = $request->input('titulo');
		$noticia->conteudo = $request->input('conteudo');
		$noticia->categoria_id = $request->input('categoria_id');
		$noticia->autor_id = $request->input('autor_id');
		$noticia->palavras_chave = $request->input('palavras_chave');

		$noticia->save();

		return redirect()->action('NoticiaController@administrarNoticias');
	}

	public function removeNoticia($id){

		$noticia = Noticia::find($id);

		if(empty($noticia)){
			return 'Registro não existe!';
		}

		$noticia->delete();

		return redirect()->action('NoticiaController@administrarNoticias');
	}

	public function administrarNoticias(){
		return view('administrador')->with('noticias',Noticia::all());
	}
}