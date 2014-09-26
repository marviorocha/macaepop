<?php

class Cv extends \Eloquent {
	
	protected $table = 'candidato';

	public static $editar = array(
	
		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required|email',

 
		);


	public static $foto = array(
	
		'foto' => 'mimes:jpeg,bmp,png,gif,jpg|Max:200|required',
 
		);
	
	public static $profile = array(
	
		 'descricao' => 'Required|Min:30|Max:390',
		 'telefone' => 'Min:14',
 
		);

	public static $endereco = array(

		'endereco' => 'Required',
		'estado' => 'Required',
		'numero' => 'Required',	
		'cep' => 'size:9|Required',

	    );

	public static $curriculum = array(

		'profissional' => 'Required',
 

	    );

}