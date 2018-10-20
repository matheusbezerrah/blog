<?php namespace blog;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

	protected $table = 'tbl_categoria';

	protected $fillable = array('descricao');

	protected $guarded = ['id'];

	public function noticia(){
        return $this->hasMany(Noticia::class);
    }
}
