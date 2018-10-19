<?php namespace blog\Http\Controllers;

use Illuminate\Support\Facades\DB;

class NoticiaController extends Controller {
	public function listaNoticias(){

		$noticias = DB::select('select * from tbl_noticia');

		dd($noticias);

		return 'Ronaldo é o Marcos';
	}
}