	<?php
	
	class DashbordController extends \BaseController {
	
	/**
	* Display a listing of the resource.
	* GET /dashbordController
	*
	* @return Response
	*/
	
	
	
	
	public function __construct()
	{   
	
	
	}
	
	
	
	public function getIndex()
	{
	
	$user      = Sentry::getUser();
	$cv 	   = Cv::where('user_id',$user->id)->first();
	$title 	   = Geral::titulo(); 
 	$client    = IndeedAPI::publish();
	$jobs = $client->results->result;
	$title  = Geral::titulo(); 
	return View::make('dashboard/index')
 	->withUser($user)
 	->withCv($cv)
 	->withTitle($title)
 	->withJobs($jobs);
	
	
	}
	
	/**
	* Show the form for creating a new resource.
	* GET /dashbord_controller/create
	*
	* @return Response
	*/
	public function getEditar()
	{
	
 

	$user 	= Sentry::getUser();
	$cv 	= Cv::where('user_id',$user->id)->first();
	$title  = Geral::titulo(); 
	$client    = IndeedAPI::publish();
	$jobs = $client->results->result;

	return View::make('dashboard/editar')->withUser($user)->withCv($cv)->withTitle($title)->withJobs($jobs);
 
	$user 	= Sentry::getUser();
	$cv 	= Cv::where('user_id',$user->id)->first();
	$title  = Geral::titulo(); 

	



	return View::make('dashboard/editar')->withUser($user)->withCv($cv)->withTitle($title);
 
	
	}
	
	
	// editar dados pessoais
	public function postEditar(){
	
	$validation = Validator::make(Input::all(), Cv::$editar);
	
	if ($validation->fails())
	{
	return Redirect::to('dashbord/editar')->withErrors($validation);
	}
	
	
	$user 					= Sentry::getUser();	
	$update 				= User::find($user->id);
	$update_cv 				= Cv::find(Input::get('id'));
	$update->first_name 	= Input::get('first_name');
	$update->last_name 		= Input::get('last_name');
	$update->email 			= Input::get('email');
	$update_cv->telefone 	= Input::get('telefone');
	$update_cv->celular 	= Input::get('celular');
	$update_cv->visto 		= Input::get('visto');
	$update_cv->url 		= Input::get('url');
	$update->save();
	$update_cv->save();
	
	return  Redirect::to('dashbord')->with('message','Dados atualizado com sucesso!');
	
	}
	

	// editar as informações sobre foto 
	public function postFoto(){

	$validation = Validator::make(Input::all(), Cv::$foto);

	if ($validation->fails())
	{
	return Redirect::to('dashbord/editar')->withErrors($validation);
	}
	
	$user 					= Sentry::getUser();	
	$update 				= User::find($user->id);
	$update_cv 				= Cv::find(Input::get('id'));
	$filename = date('d-m-Y').'-'.$user->first_name.'-'.base64_encode($user->id).'-foto.jpg';
	Image::make(Input::file('foto'))->resize('220','220')->save('images/profile/'.$filename);
	$update_cv->foto = 'images/profile/'.$filename;
	$update_cv->save();
	return  Redirect::to('dashbord')->with('message','Yahoo... Seu profile foi atualizado com sucesso!');

	}

 

	// editar profile form with image 
	public function postProfile(){
	
	$validation = Validator::make(Input::all(), Cv::$profile);
	
	if ($validation->fails())
	{
	return Redirect::to('dashbord/editar')->withErrors($validation);
	}
	
	
	$user 					= Sentry::getUser();	
	$update 				= User::find($user->id);
	$update_cv 				= Cv::find(Input::get('id'));
	$update_cv->descricao 	= Input::get('descricao');
	$update_cv->save();
	return  Redirect::to('dashbord')->with('message','Yahoo... Seu profile foi atualizado com sucesso!');


	}

// Endereço page 
	public function getEndereco(){

	$user 	= Sentry::getUser();
	$cv 	= Cv::where('user_id',$user->id)->first();
	$title  = Geral::titulo(); 
 
	$client    = IndeedAPI::publish();
	$jobs = $client->results->result;
 	return View::make('dashboard/endereco')->withUser($user)->withCv($cv)->withTitle($title);	

	}

// Post Endereço Page
	public function postEndereco(){

	$validation = Validator::make(Input::all(), Cv::$endereco);
	
	if ($validation->fails())
	{
	return Redirect::to('dashbord/endereco')->withErrors($validation);
	}


	$user 					= Sentry::getUser();	
	$update_cv 				= Cv::find(Input::get('id'));
	$update_cv->endereco 	= Input::get('endereco');
	$update_cv->cep 		= Input::get('cep');
	$update_cv->numero 		= Input::get('numero');
	$update_cv->bairro 		= Input::get('bairro');
	$update_cv->cidade 		= Input::get('cidade');
	$update_cv->estado 		= Input::get('estado');
	$update_cv->pais 		= Input::get('pais');
	$update_cv->save();
	
	return  Redirect::to('dashbord')->with('message','<b>Endereço</b> atualizado com sucesso!');
	 

	}
	
	// Editar curriculum profissional	
	public function getCurriculum() {

	$user 	= Sentry::getUser();
	$cv 	= Cv::where('user_id',$user->id)->first();
	$title  = Geral::titulo(); 
	$client    = IndeedAPI::publish();
	$jobs = $client->results->result;
	return View::make('dashboard/curriculum')->withUser($user)->withCv($cv)->withTitle($title)->withJobs($jobs);
	return View::make('dashboard/curriculum')->withUser($user)->withCv($cv)->withTitle($title);

	}

	// post de curriculum page
	public function postCurriculum() {


	$validation = Validator::make(Input::all(), Cv::$curriculum);
	
	if ($validation->fails())
	{
	return Redirect::to('dashbord/endereco')->withErrors($validation);
	}


	$user 					= Sentry::getUser();	
	$update_cv 					= Cv::find(Input::get('id'));
	$update_cv->profissional 	= Input::get('profissional');
	$update_cv->formacao 		= Input::get('formacao');
	$update_cv->experiencia 	= Input::get('experiencia');
	$update_cv->idioma 			= Input::get('idioma');
	$update_cv->cursos 			= Input::get('cursos');
	$update_cv->outros 			= Input::get('outros');
	$update_cv->save();
	
	return  Redirect::to('dashbord')->with('message','<b>Curriculum</b> atualizado com sucesso!');

	}

	// alterar senha do sistema editar...
 	public function getSenha(){
	
	$user 	= Sentry::getUser();
	$cv 	= Cv::where('user_id',$user->id)->first();
	$title  = Geral::titulo();
	$client    = IndeedAPI::publish();
	$jobs = $client->results->result;
	return View::make('dashboard/senha')->withUser($user)->withCv($cv)->withTitle($title)->withJobs($jobs);
	$title  = Geral::titulo(); 
	return View::make('dashboard/senha')->withUser($user)->withCv($cv)->withTitle($title);
 	
 	}

 	public function postSenha(){
	
	$user 				= Sentry::find(Input::get('id'));	
	$user->password 	= Input::get('password');
	$user->save();

	return  Redirect::to('dashbord')->with('message','<b>Senha</b> atualizado com sucesso!');
 		
 	}

	
	
	}