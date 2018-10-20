<?php namespace blog\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class NoticiaController extends Controller {
	public function listaFeedNoticias(){

		$noticias = DB::select('select * from tbl_noticia');
		return view('feed')->with('noticias',$noticias);
	}

	public function findNoticia(){
		$id = Request::input('id');
		$noticia = DB::select('select * from tbl_noticia where id = ?', [$id]);
		return view('noticia')->with('noticia', $noticia[0]);
	}
}