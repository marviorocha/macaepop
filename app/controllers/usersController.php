	<?php
	
	class UsersController extends \BaseController {
	
	/**
	* Display a listing of the resource.
	* GET /users
	*
	* @return Response
	*/
	public function __construct() {
	//We will implement Filters later
	 
	}
	
	
	public function getIndex()
	{
	
	$title = "Login - Macaé POP";
	return View::make('users.login',Input::get())->withTitle($title);
	return View::make('users.login',Input::get());
		
	}
	
	/**
	* Show the form for creating a new resource.
	* GET /users/create
	*
	* @return Response
	*/
	public function getCreate()
	{
 

	$title = "Cadastre-se Grátis";	
	return View::make('users.registro')->withTitle($title);
 	return View::make('users.registro');
 	
	
	} //** form create user site **//
	
	public function postCreate(){
	
	
	$users                                 = new User();
	
	$rules                                 = array(
	'name'                                 =>'required',
	'lastname'                             =>'required',
	'email'                                =>'required|email|unique:users',
	'password'                             =>'required|min:6|confirmed',
	);
	
	
	
	$validator                             = Validator::make(Input::all(),$rules); 
	
	if($validator->fails()){
	return Redirect::to('users/create')->withErrors($validator)
	->withErrors($validator)
	->withInput();
	}


	Sentry::register(array(
	'first_name'                           => Input::get('name'),
	'last_name'                            => Input::get('lastname'),
	'email'                                => Input::get('email'),
	'password'                             => Input::get('password'),
	'activated'                            => true,
	));
	

	return Redirect::to('users/success')
	->with('message','Somethig went wrong')
	->withErrors($validator)
	->withInput();
	
	}
	
	/**
	** Page sucesso login 
	* @return sucesso
	**/
	
	public function getSuccess(){

		
	//
	$user = User::orderBy('id','desc')->first();
  	
  	$cv = new Cv;
  	$cv->user_id = $user->id;
  	$cv->save();
	return View::make('users.sucesso');
  
	}
	
	
	/**
	* Store a newly created resource in storage.
	* POST /users
	*
	* @return Response
	*/
	public function getLogin()
	{
	

	$title = "Login - Macaé POP";
	return View::make('users.login')->withTitle($title);
	return View::make('users.login');
	
	
	}
	
	public function postLogin()
	
	{
	
	try
	{
	// Login credentials
	$credentials                           = array(
	'email'                                =>  Input::get('email'),
	'password'                             =>  Input::get('password'),
	);
	
	// Authenticate the user
	$user                                  = Sentry::authenticate($credentials, false);
	}
	catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
	{
	// validação login usuário
	return Redirect::to('users/login')->with('message', 'Falha! Email / Senha não pode ficar em branco.');
	
	}
	catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
	{
	return Redirect::to('users/login')->with('message', 'O campo senha é obrigatório!'); 
	}
	catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
	{
	return Redirect::to('users/login')->with('message', 'E-mail / Senha está incorreta, tente novamente!'); 
	}
	catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
	{
	return Redirect::to('users/login')->with('message', 'Usuário encontrado, por favor cadastre-se!'); 
	}
	
	catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
	{
	return Redirect::to('users/login')->with('message', 'Usuário não é ativado'); 
	
	}
	
	// The following is only required if the throttling is enabled
	catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
	{
	return Redirect::to('users/login')->with('message', 'Usuário é suspendido'); 
	}
	catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
	{
	return Redirect::to('users/login')->with('message', 'Usuário é banido ou deletado'); 
	}
	
	$user      = Sentry::getUser();
	
	try
	{
	// Find the user using the user id
	$user       = Sentry::findUserById($user->id);
	
	// Log the user in
	Sentry::login($user, false);
	}
	catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
	{
	return Redirect::to('users/login')->with('message', 'Login é obrigatório'); 
	}
	catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
	{
	return Redirect::to('users/login')->with('message', 'Usuário não encontrado'); 
	}
	
	
	// Following is only needed if throttle is enabled
	catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
	{
	$time                                  = $throttle->getSuspensionTime();
	
	return Redirect::to('users/login')->with('message', 'Usuário é suspendido por [$time] minutos'); 
	
	}
	catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
	{
	return Redirect::to('users/login')->with('message', 'Usuário é banido do sistema'); 
	
	}
	
	return Redirect::to('dashbord');
	
	}
	
 

	public function getLogout(){
		
		Sentry::logout();
 
		$title = "Você saiu - Macaé POP";
		return Redirect::to('users/login')->withTitle($title); 
		return Redirect::to('users/login'); 

	}


	
	
	}