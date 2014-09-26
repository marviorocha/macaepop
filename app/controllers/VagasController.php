<?php 

/**
* Vagas e controller 
*/
class VagasController extends \BaseController
{

public function getIndex(){


$client    = IndeedAPI::publish();
$jobs 	   = $client->results->result;
$user      = Sentry::getUser();
$cv 	   = Cv::where('user_id',$user->id)->first();
$title 	   = Geral::titulo(); 
$client  = IndeedAPI::publish();
$jobs = $client->results->result;
 
$user      = Sentry::getUser();
$cv 	   = Cv::where('user_id',$user->id)->first();
$title  = Geral::titulo(); 
return View::make('dashboard/vagas')->withUser($user)->withCv($cv)->withTitle($title)->withJobs($jobs);
 
}

public function postSearch(){


	$client    = IndeedAPI::search();
	$jobs 	   = $client->results->result;
	$user      = Sentry::getUser();
	$cv 	   = Cv::where('user_id',$user->id)->first();
	$title 	   = Geral::titulo(); 

	return View::make('dashboard/vagas')->withUser($user)->withCv($cv)->withTitle($title)->withJobs($jobs)->withMensage('Nenhuma oportunidade com essa palavra chave. Por favor, tente novamente.');
 
}
 

}






























 ?>