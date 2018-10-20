<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use blog\Categoria;
use blog\Autor;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('CategoriaTableSeeder');
		$this->call('AutorTableSeeder');
	}

}

class CategoriaTableSeeder extends Seeder {
	public function run()
	{
		Categoria::create(['descricao'=>'Política']);
		Categoria::create(['descricao'=>'Segurança']);
		Categoria::create(['descricao'=>'Jogada']);
		Categoria::create(['descricao'=>'Negócios']);
		Categoria::create(['descricao'=>'Arte e Lazer']);
	}
}

class AutorTableSeeder extends Seeder {
	public function run()
	{
		Autor::create(['nome'=>'Matheus Bezerra']);
		Autor::create(['nome'=>'João Teixeira']);
		Autor::create(['nome'=>'Maria Clara']);
		Autor::create(['nome'=>'Everaldo Silva']);
		Autor::create(['nome'=>'José Gomes']);
	}
}