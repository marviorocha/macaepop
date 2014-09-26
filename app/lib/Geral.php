<?php 
<<<<<<< HEAD
=======

>>>>>>> 67dc3171982fb15cafd3f52478aaea7a5973f773
// Class para informações gerais do sites com vareaves uteis para administração de titulos e SEO

/**
* Desenvolvido por Marvio Rocha
*/
class Geral 
{
	
public static function titulo() {

$user      = Sentry::getUser();
$cv 	   = Cv::where('user_id',$user->id)->first();
$search    = Input::get('busca');
<<<<<<< HEAD
$pesquisa  = Session::get('pesquisar');
=======
>>>>>>> 67dc3171982fb15cafd3f52478aaea7a5973f773
$uri = Request::path();

$title = [
// titulo para dashboard 
<<<<<<< HEAD
"home" 		    => "Empregos e Networking - Macaé POP",
"dashboard" 	=> "Painel (Dashboard) - $user->first_name $user->last_name",
"editar" 		=> "Editar Informações - $user->first_name $user->last_name",
"endereco"	    => "Endereço Curriculum - $user->first_name $user->last_name",
"senha" 		=> "Alterar Senha - $user->first_name $user->last_name",
"curriculum" 		=> "Editar Curriculum - $user->first_name $user->last_name",

=======
"dashboard" 	=> "Painel (Dashboard) - $user->first_name $user->last_name",
"editar" 		=> "Editar Informações - $user->first_name $user->last_name",
"endereco"	    => "Endereço Curriculum - $user->first_name $user->last_name",
"senha" 		=> "Alterar Senha- $user->first_name $user->last_name",
>>>>>>> 67dc3171982fb15cafd3f52478aaea7a5973f773
// end titulos dash board

// vagas de emprego titulos 

<<<<<<< HEAD
"vagas" 		=> "Empregos em destaque - $user->first_name $user->last_name",
"search" 		=> "Pesquisando por: $search",
"pesquisar" 	=> "Oportunidade de Empregos: $pesquisa",
=======
"vagas" 	=> "Empregos em destaque - $user->first_name $user->last_name",
"search" 	=> "Pesquisando por: $search",
>>>>>>> 67dc3171982fb15cafd3f52478aaea7a5973f773




];
 
<<<<<<< HEAD

 if($uri == ''){
	
	return $title['home'];
 }


=======
>>>>>>> 67dc3171982fb15cafd3f52478aaea7a5973f773
 if($uri == 'dashbord'){
	
	return $title['dashboard'];
 }

 if($uri == 'dashbord/editar'){
	
	return $title['editar'];
 }
 
 if($uri == 'dashbord/endereco'){
	
	return $title['endereco'];
 }
<<<<<<< HEAD

  if($uri == 'dashbord/curriculum'){
	
	return $title['curriculum'];
 }
 
=======
>>>>>>> 67dc3171982fb15cafd3f52478aaea7a5973f773
 
 if($uri == 'dashbord/senha'){
	
	return $title['senha'];
 }
 
 if($uri == 'vagas'){
	
	return $title['vagas'];
 }
 
 if($uri == 'vagas/search'){
	
	return $title['search'];
 }
<<<<<<< HEAD

 if($uri == 'search/'.$pesquisa){
	
	return $title['pesquisar'];
 }

=======
>>>>>>> 67dc3171982fb15cafd3f52478aaea7a5973f773
 
} 

// função para comprimento de 
// usuários logado no site

public static function comprimento(){

$hora_do_dia=date("H");
 
/*uso de condicionais, poderíamos utilizar o switch também*/
 
if (($hora_do_dia >=6) && ($hora_do_dia <=12)) echo "Bom dia!"; // Franceis
if (($hora_do_dia >12) && ($hora_do_dia <=18)) echo "Boa Tarde!";
if (($hora_do_dia >18) && ($hora_do_dia <=24)) echo "Boa Noite!";
if (($hora_do_dia >24) && ($hora_do_dia <6)) echo "Boa Madrugada!";

}


// jobs stacia class

public static function Vagas(){



 
 
 

	}





}

?>