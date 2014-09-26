<?php 

class Curiculumstatus  {

   // protected $table = 'users';

public static function usuarios(){


$user      = Sentry::getUser();
$cv 	   = Cv::where('user_id', $user->id)->first();

 
$color  	= array("cor1"=>"color1","cor2"=>"color2","cor3"=>"color3","cor4"=>"color4");
$porcent	= array("start"=>"5","dez"=>"10");

$perguntas = 17;
$acertos = $cv->status;
$b = count($cv->status);
 
$c = 1-1;
 
if(!empty($cv->foto)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}  

 

if(!empty($cv->descricao)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}
 
  

if(!empty($cv->telefone)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}
 

if(!empty($cv->celular)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}
 
if(!empty($cv->endereco)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}
 

if(!empty($cv->numero)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}
 
if(!empty($cv->bairro)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}

 
if(!empty($cv->cep)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}
 
if(!empty($cv->cidade)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}
 

if(!empty($cv->estado)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}
 

if(!empty($cv->pais)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}
 
if(!empty($cv->profissional)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}
 

if(!empty($cv->formacao)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}
 

if(!empty($cv->experiencia)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}
 
if(!empty($cv->cursos)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}
 
 
if(!empty($cv->idioma)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
}
 
if(!empty($cv->outros)){
	$stac = Cv::find($cv->id);
	$stac->status = $b++;
	$stac->save();
} 
 


$static = explode(".", (($acertos / $perguntas) * 100));
$status_curriculum = $static[0]; 

 if($cv->status <= "17" ){

$tota1 = $color['cor2'];

}

 if($cv->status <= "15" ){

$tota1 = $color['cor2'];

}

if($cv->status <= "12" ){

$tota1 = $color['cor3'];

}

if($cv->status <= "8" ){

$tota1 = $color['cor1'];

}


if($cv->status <= "4" ){

$tota1 = $color['cor4'];

}

return '<div class="progress-bar  '.$tota1.'" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" 
       style="width:'.$status_curriculum.'%">
        <span class="bar-width">'.$status_curriculum.'%</span>';
 
}



}

?>