<?php namespace blog;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model {

	protected $table = 'tbl_autor';

	protected $fillable = array('nome');

	protected $guarded = ['id'];

	public function noticia(){
		return $this->hasMany(Noticia::class);
	}
}
