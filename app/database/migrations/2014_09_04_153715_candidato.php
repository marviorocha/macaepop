<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Candidato extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
 
Schema::create('candidato', function(Blueprint $table)
		{
		$table->increments('id');
		$table->integer('user_id')->length(10)->unsigned();
		$table->foreign('user_id')->references('id')->on('users');
		$table->enum('visto', array('publico','privado'));
		$table->string('foto');
		$table->string('descricao','380');
		$table->string('telefone');
		$table->string('celular');
		$table->string('url');
		$table->text('endereco');
		$table->string('numero', '100');
		$table->string('bairro', '250');
		$table->string('cep');
		$table->text('cidade');
		$table->text('estado');
		$table->text('pais');
		$table->string('profissional');
		$table->string('formacao');
		$table->string('experiencia','350');
		$table->string('idioma','350');
		$table->string('cursos','350');
		$table->string('outros','350');
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
		Schema::drop('candidato');
	
	}

}
