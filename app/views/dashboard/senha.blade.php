				@extends('layouts.dashboard')
				
				@section('content')
				
				<section id="blog" class="container">
				<div class="center">
				<h2>Alterar Minha Senha</h2>
				<p class="lead">{{ $user->first_name }}, aqui você pode alterar sua senha sempre que desejar.</p>
				</div>
				
				<div class="blog">
				<div class="row">
				<div class="col-md-8">
				<div class="blog-item">
				<div class="row">
				
				
				
				
				
				
				<div class="col-xs-12 col-sm-11 blog-content">
				<h2><a href="blog-item.html"><i class="fa fa-user"></i> Profile</a></h2>
				
				<div class="panel panel-default">
				<div class="panel-body">
				
				<div class="media">
				<a class="pull-left " href="#">
				
			 
				 


				{{ Form::open(array('url'=>'dashbord/senha','files' => true)) }}
				{{ Form::hidden('id',  $cv->id ) }}
				</a>
				<div class="media-body">
				<div class="form-group">
				<div class="col-xs-12">
				{{ Form::label('senha','Alterar Senha') }}: <br>
				
				
				<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fa  fa-folder-open"></i> Adicionar Foto</a>
				<p class="text-danger">{{ $errors->first('foto') }}</p>
				
				<p></p>
				</div>
				
				
				<p></p>
				
				
				<div class="form-group">
				<div class="col-xs-12">
				{{ Form::label('descricao','Coloque sua descrição') }}: <br>
				{{ Form::textarea('descricao',$cv->descricao, array('placeholder'=>'Digite aqui informações sobre suas habilidades','class' => 'form-control summernote','rows'=>'3')) }} 
				
				<p class="text-danger">{{ $errors->first('descricao') }}</p>
				
				<p></p>
				</div>
				
				</div>
				
				
				
				<div class="form-group">
				<div class="col-xs-2"><button type="submit" class="btn btn-success">Salvar</button></div>
				<div class="col-xs-2"> {{ HTML::link('dashbord','cancelar', array('class'=>'btn btn-danger')) }}</div>
				</div>
				
				
				{{ Form::close() }}
				
				</div>
				</div>
				
				<p></p>
				</div>
				</div>
				</div><!-- / div finalização do panel 1 -->
				
				<h2><a href="blog-item.html"><i class="fa fa-file-text-o"></i>  Dados Pessoais</a></h2>
				
				<h3>
				
				
				<div class="panel panel-default">
				<div class="panel-body">
				
				
				
				{{ Form::open( array('url'=>'dashbord/editar','pos')) }}
				
				{{ Form::hidden('id',  $cv->id ) }}
				
				
				
				
				<div class="form-group">
				<div class="col-xs-6">	
				{{  Form::label('Nome', 'Seu nome:'); }}
				{{ Form::text('first_name', $user->first_name ,array('class'=>'form-control','placeholder'=>'Digite seu nome')) }}
				<p class="text-danger">{{ $errors->first('first_name') }}</p>
				</div>
				
				<div class="col-xs-6">
				{{  Form::label('Sobrenome', 'Sobrenome:'); }}
				{{ Form::text('last_name', $user->last_name ,array('class'=>'form-control','placeholder'=>'Digite seu sobrenome')) }}
				<p class="text-danger">{{ $errors->first('last_name') }}</p> <p></p>
				</div>
				</div>
				
				<div class="form-group">
				
				<div class="col-xs-12">	
				{{  Form::label('E-mail', 'E-mail:'); }}
				{{ Form::text('email', $user->email ,array('class'=>'form-control','placeholder'=>'Digite seu email')) }} <p></p>	
				<p class="text-danger">{{ $errors->first('email') }}</p>
				</div>
				</div>	
				
				<div class="form-group">
				
				<div class="col-xs-6">	
				{{  Form::label('telefone', 'Telefone:'); }}
				{{ Form::text('telefone', $cv->telefone ,array('class'=>'form-control tel','placeholder'=>'Telefone com DDD')) }}	
				<p class="text-danger">{{ $errors->first('telefone') }}</p>
				</div>
				<div class="col-xs-6">	
				{{  Form::label('celular', 'Celular:'); }}
				{{ Form::text('celular', $cv->celular ,array('class'=>'form-control cel','placeholder'=>'Celular com DDD')) }}	<p></p>
				</div>	
				</div>	
				<div class="form-group">
				<div class="col-xs-12">	
				{{  Form::label('visibilidade', 'Visibilidade:'); }} <br>
				Publico: {{ Form::radio('visto', 'publico' ) }} 
				Privado: {{ Form::radio('visto', 'privado') }}
				<p class="text-danger">{{ $errors->first('visto') }}</p>	<p></p>
				</div>	
				</div>	
				<div class="form-group">
				<div class="col-xs-12">	
				{{  Form::label('url', 'Perfil URL:'); }}
				{{ Form::text('url', $cv->url, array ('class'=>'form-control','placeholder'=>'Ex: www.macaepop.com.br/seu-nome')) }}
				<p class="text-danger">{{ $errors->first('url') }}</p>

					<p></p>
				</div>	
				</div>	
				
				<p></p>
				
				<div class="form-group">
				<div class="col-xs-12">
				<button type="submit" class="btn btn-success">Salvar</button> 
				{{ HTML::link('dashbord','cancelar', array('class'=>'btn btn-danger')) }} 
				</div>
				</div>
				
				
				</div>
				</div>
				</h3>
				
				
				
				</div>
				
				{{ Form::close() }}
				
				
				
				
				
				</div>    
				</div><!--/.blog-item-->
				@stop             
				
				@include('dashboard.widget')
				
				
				</section><!--/#blog-->