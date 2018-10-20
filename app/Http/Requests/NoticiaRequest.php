<?php namespace blog\Http\Requests;

use blog\Http\Requests\Request;

class NoticiaRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'titulo' => 'required',
			'conteudo' => 'required',
			'categoria_id' => 'required',
			'autor_id' => 'required',
			'palavras_chave' => 'required'
		];
	}

	public function messages()
	{
		return [
			'required' => 'O campo :attribute é obrigatório.'
		];
	}
}
