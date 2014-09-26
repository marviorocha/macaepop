<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
 
	$title 	   = "Empregos e Networking - Macaé POP";
	return View::make('layouts.home')->withTitle($title);
 	return View::make('layouts.home');
 
});

Route::get('/view/{id}', function($id)
{	

	$user      = Vercurriculum::find($id);
	$cv 	   = Cv::where('user_id',$user->id)->first();
	$title 	   = "$user->first_name $user->last_name - Curriculum Macaé POP";
	return View::make('curriculum.publish')->withUser($user)->withCv($cv)->withTitle($title);
	return View::make('curriculum.publish')->withUser($user)->withCv($cv);

});

Route::get('/curriculum/{id}', function($id)
{

	$user      = Vercurriculum::find($id);
	$cv 	   = Cv::where('user_id',$user->id)->first();
 	
	$html 	   = View::make('curriculum.html')->withUser($user)->withCv($cv); 
	 
	return PDF::load($html, 'A4', 'portrait')->show();
	//return View::make('curriculum.html')->withUser($user)->withCv($cv); 

});

 


Route::get('/search/{id}', function($id)
{
	Session::put('pesquisar',$id);
	$client  = IndeedAPI::pesquisar();
	$jobs    = $client->results->result;
	$user    = Sentry::getUser();
	$cv 	 = Cv::where('user_id',$user->id)->first();
	$title  = Geral::titulo(); 
  
	return View::make('dashboard/vagas')->withUser($user)->withCv($cv)->withTitle($title)->withJobs($jobs)->withMensage('Nenhuma oportunidade com essa palavra chave. Por favor, tente novamente.');
 

});
 
// controller 

Route::controller('users','UsersController'); // controller user login
Route::controller('vagas','VagasController'); // controller user vagas controller 


// grupo de controller
Route::group(array('before' => 'auth'), function()
{

  Route::controller('dashbord','DashbordController'); // controller user login
 
});

# Admin Routes
Route::group(['before' => 'auth|admin'], function()
{
  Route::get('/admin', ['as' => 'admin_dashboard', 'uses' => 'AdminController@getHome']);
  Route::resource('admin/profiles', 'AdminUsersController', ['only' => ['index', 'show', 'edit', 'update', 'destroy']]);
});