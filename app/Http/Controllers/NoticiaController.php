<?php namespace blog\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class NoticiaController extends Controller {
	public function listaFeedNoticias(){

		$noticias = DB::select('select * from tbl_noticia');
		return view('feed')->with('noticias',$noticias);
	}

	public function findNoticia(){
		$id = Request::route('id');
		$noticia = DB::select('select * from tbl_noticia where id = ?', [$id]);

		if(empty($noticia)){
			return 'Esta notícia não está cadastrada. Favor, comunique o administrador.';
		}

		return view('noticia')->with('noticia', $noticia[0]);
	}

	public function novaNoticia(){
		return view('formNoticia');
	}

	public function adicionaNoticia(){
		$titulo = Request::input('titulo');
		$conteudo = Request::input('conteudo');
		$categoria = Request::input('categoria');
		$autor = Request::input('autor');
		$palavrasChave = Request::input('palavras-chave');

		DB::insert('insert into tbl_noticia (titulo, conteudo, id_categoria, id_autor, palavras_chave) 
						values (?, ?, ?, ?, ?)', [$titulo,$conteudo,$categoria,$autor,$palavrasChave]);

		
		return view('adiciona');
	}
}