
	@extends('layouts.dashboard')
	
	@section('content')
	
	<section id="blog" class="container">
	<div class="center">

	<?php $find = Input::get('busca'); ?>

@if($find)
	<h2>Pesquisando por: {{ Input::get('busca') }}</h2>
 

@endif

@if (empty($find)) 
		<h2>Encontre o emprego ideal para você</h2>
		<p class="lead"><b>{{ $user->first_name }}</b>, aqui você pode encontrar diversas vagas de emprego para seu interesse. 
	<br> Mesmo seu curriculum com status de publico.</p>	

@endif



	</div>
	
	<div class="blog">
	<div class="row">
	<div class="col-md-8">

 

 <?php 

	foreach ($jobs as $job) {



if (empty($job->jobtitle)){
echo '<div class="alert">
 		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 		<strong>Vagas</strong> '.$mensage.'
 	</div>';
}

 
	 echo'

	 <div class="blog-item">
	<div class="row">
	<div class="col-xs-12 col-sm-2 text-center">
	<div class="entry-meta">  
	<span id="publish_date">'.date('d-M-Y  H:i:s', strtotime($job->date)).'</span>
	<span><i class="fa  fa-clock-o"></i> <a href="#">'.$job->formattedRelativeTime.'</a> </span>
	<span><i class="fa  fa-map-marker"></i> <a href="#">'.$job->formattedLocationFull.' </a>
	</span>



	</div>
	</div>
	<div class="col-xs-12 col-sm-10 blog-content">
	<h2><a target=_black href="'.$job->url.'">'.$job->jobtitle.' </a></h2>
	<i class="fa fa-building-o"></i> '.$job->company .'
	<h3>'.$job->snippet.'</h3>
	<a target=_black class="btn btn-info readmore" href="'.$job->url.'"><i class="fa fa-eye"></i> Visualizar mais <i class="fa fa-angle-right"></i></a>
	</div>
	</div>    
	</div>'; 

	}
 	

  ?>

	@stop             
	
	@include('dashboard.widget')
	
<!-- Posicione esta tag no cabeçalho ou imediatamente antes da tag de fechamento do corpo. -->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'pt-BR'}
</script>	
<script src="//platform.linkedin.com/in.js" type="text/javascript">
  lang: pt_BR
</script>
	</section><!--/#blog-->