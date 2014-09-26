		
		@extends('layouts.dashboard')
		
		@section('content')
		
		<section id="blog" class="container">
		<div class="center">
		<h2>Dashboard</h2>
		<p class="lead">{{ Geral::comprimento() }} <b>{{ $user->first_name }}</b>,
		 aqui é o seu panel de controle. Veja o status de preenchimento de seu curriculum <br>e deixe sempre atualizado.</p>
		
		
		</div>
		
		<div class="blog">
		<div class="row">
		<div class="col-md-8">
		<div class="blog-item">
		<div class="row">
		<div class="col-xs-12 col-sm-2 text-center">
		<div class="entry-meta">
		<span id="publish_date">Panel</span>
		<span><i class="fa fa-file-text-o"></i>  {{ HTML::link('dashbord/curriculum','Curriculum') }}</span>
		<span><i class="fa fa-edit"></i> {{ HTML::link('dashbord/editar','Editar') }}</span>
		<span><i class="fa fa-lock"></i>  {{ HTML::link('dashbord/senha','Senha') }}</span>
		
		</div>
		<p></p>
		<a target="_black" href="view/{{ $cv->user_id }}">
		<i class="fa   fa-eye"></i> Visualizar </a> 
		</div>
		
		
		
		<div class="container">
		<div class="row">
		<div class="col-sm-6 wow fadeInDown">
		
		@if (Session::has("message"))
		<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ Session::get('message') }}
		</div>
		@endif
		
		<div class="skill">
		<h2>Informações geral</h2>
		<p> 	<span class="text-warning"><i class="fa 
		fa-refresh"></i> Ultima atualização: {{ date('d/m/Y - H:i:s', strtotime($user->updated_at)) }} </span> </p>
	
		@if ($cv->visto == "publico")
		<i class="fa  fa-thumbs-o-up fa-2x">   </i> Seu curriculum está como: 
		<b>Público</b> {{ HTML::link('dashbord/editar','(Editar)') }}
		
		@elseif ($cv->visto == "privado") 
		
		<i class="fa fa-lock fa-2x"></i>  Seu curriculum está como: <b>Privado</b> 
		{{ HTML::link('dashbord/editar','(Editar)') }}
		
		
		@endif
		</p>
		
		
		<div class="progress-wrap">
		<h3>Status:</h3>
		<div class="progress">
		{{ Curiculumstatus::usuarios() }}
		</div>
		
		</div>
		</div>
		
		
		</div><!--/.col-sm-6-->
		
		
		
		</div><!--/.row-->
		</div>
		</div>
		<div class="col-xs-12 col-sm-9 blog-content">
		
		
		
		
		<h2><a href="blog-item.html">Meu curriculum</a></h2>
		
		
		<h3>
		<i class="fa fa-file-text-o"></i> <strong class="">Informação</strong> {{ HTML::link('dashbord/editar','(Editar)') }} <p></p>
		
		<p> {{ $cv->descricao }}</p>
		
		<b>Nome:</b> {{ $user->first_name }}  {{ $user->last_name }} <br>
		<b>E-mail:</b> {{ $user->email }}  <br>
		<b>Telefone:</b> {{ $cv->telefone }} <br>
		<b>Celular:</b> {{ $cv->celular }} <br>
		<b>URL:</b> macaepop.com.br/{{ $cv->url }} <br>
		
		
		
		</h3>
		
		<hr>
		<h3>
		<i class="fa fa-map-marker"></i> <strong class="">Endereço</strong>{{ HTML::link('dashbord/endereco','(Editar)') }} <p></p>
		<b>Logradouro:</b> {{ $cv->endereco }}  <br>
		<b>Número:</b> {{ $cv->numero }}
		</br>
		
		<b>CEP:</b> {{ $cv->cep }}</br> <b>Cidade:</b>  {{ $cv->cidade }} </br> <b>Estado:</b> {{ $cv->estado }} </br>
		<b>País:</b>  {{ $cv->pais }} </br>
		
		</h3>
		
		<hr>
		<h3>
		<i class="fa  fa-file-text-o"></i> <strong class="">Curriculum</strong> {{ HTML::link('dashbord/curriculum','(Editar)') }}  <p></p>
		<span class="text-warning"><i class="fa 
		fa-refresh"></i> Ultima atualização: {{ date('d/m/Y - H:i:s', strtotime($cv->updated_at)) }} </span> <p></p>
		<b>Titulo profissional:</b>  {{ $cv->profissional }}  <p></p>
		<b>Formação acadêmica:</b> <br>
		{{ $cv->formacao }}
		<p></p>
		
		<b>Experiência Profissional:</b> <br>
		{{ $cv->experiencia }}
		
		<p></p>
		
		<b>Idioma:</b> <br>
		<div class="tags">
		
		<ul class="tag-cloud">
		@foreach (explode(',',$cv->idioma) as $idiomas)
		<li><a class="btn btn-xs btn-primary" href="#">{{ $idiomas }}</a></li>
		@endforeach 
		
		</ul>
		</div> 
		
		
		<p></p>
		<b>Cursos:</b> <br>
		
		<div class="tags">
		
		<ul class="tag-cloud">
		@foreach (explode(',',$cv->cursos) as $curso)
		<li><a class="btn btn-xs btn-primary" href="#">{{ $curso }}</a></li>
		@endforeach 
		
		</ul>
		</div> 
		<p></p>
		<b>Outras informações:</b> <br>
		{{ $cv->outros }} 
		</h3>
		
		</div>
		</div>    
		</div><!--/.blog-item-->
		@stop             
		
		@include('dashboard.widget')
		
		
		</section><!--/#blog-->
		
		
