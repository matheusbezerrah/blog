<?php namespace blog;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model {

	protected $table = 'tbl_noticia';
	
	protected $fillable = array('titulo','conteudo','palavras_chave','categoria_id','autor_id','id');

	public function categoria(){
		return $this->belongsTo(Categoria::class,'categoria_id');
	}

	public function autor(){
		return $this->belongsTo(Autor::class,'autor_id');
	}

}
