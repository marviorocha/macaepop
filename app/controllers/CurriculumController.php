<?php 

//**********************************************
// Controller para administração de curriculuns
// class desenvolvido por Marvio Rocha. 
// Todos os direitos reservados © 2014 - Marvio Rocha
//**********************************************
/**
* 
*/
class CurriculumController extends \BaseController 
{
	
	public function getIndex(){

	$user      = Vercurriculum::find($id);
	$cv 	   = Cv::where('user_id',$user->id)->first();
<<<<<<< HEAD
	$title 	   = "$user->first_name $user->lastname - Curriculum Macaé POP";
	return View::make('curriculum.html')->withUser($user)->withTitle($title)->withCv($cv);
=======
	return View::make('curriculum.html')->withUser($user)->withCv($cv);
>>>>>>> 67dc3171982fb15cafd3f52478aaea7a5973f773
	}

	public function getView(){

		
		$html = '<html><body>'
            . '<p> '
            . 'templating system.</p>'
            . '</body></html>';
    return PDF::load($html, 'A4', 'portrait')->show();
	}

	
}



 ?>