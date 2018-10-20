<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriacaoTabelaNoticia extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_noticia', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo');
			$table->string('conteudo', 40000);
			$table->integer('categoria_id');
			$table->integer('autor_id');
			$table->string('palavras_chave');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_noticia');
	}

}
