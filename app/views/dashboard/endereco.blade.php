	@extends('layouts.dashboard')
	
	@section('content')
	
	<section id="blog" class="container">
	<div class="center">
	<h2>Editar Endereço</h2>
	<p class="lead"><b>{{ $user->first_name }}</b>, apenas os recrutadores podem visualizar as informações de endereço. <br> Mesmo seu curriculum com status de publico.</p>
	</div>
	
	<div class="blog">
	<div class="row">
	<div class="col-md-8">
	<div class="blog-item">
	<div class="row">
		
	
	<div class="col-xs-12 col-sm-11 blog-content">
	
	
	<h2><a href="blog-item.html"><i class="fa fa-map-marker"></i> Endereço</a></h2>
	
	<h3>
	
	
	<div class="panel panel-default">
	<div class="panel-body">
	
	
	
	{{ Form::open( array('url'=>'dashbord/endereco','pos')) }}
	
	{{ Form::hidden('id',  $cv->id ) }}
	
	
	<div class="form-group">
	<div class="col-xs-12">	
	{{  Form::label('Endereco', 'Endereço:'); }}
	{{ Form::text('endereco', $cv->endereco ,array('class'=>'form-control','placeholder'=>'Digite seu endereço')) }}
	<p class="text-danger">{{ $errors->first('endereco') }}</p>
	</div>
	
	</div>
	
	<div class="form-group">
	
	<div class="col-xs-6">
	{{  Form::label('bairro', 'Bairro:'); }}
	{{ Form::text('bairro', $cv->bairro ,array('class'=>'form-control','placeholder'=>'Digite seu bairro')) }}
	<p class="text-danger">{{ $errors->first('bairro') }}</p> <p></p>
	</div>

	<div class="col-xs-6">
	{{  Form::label('cidade', 'Cidade:'); }}
	{{ Form::text('cidade', $cv->cidade ,array('class'=>'form-control','placeholder'=>'Digite sua cidade')) }}
	<p class="text-danger">{{ $errors->first('cidade') }}</p> <p></p>
	</div>
	<div class="col-xs-6">
	{{  Form::label('numero', 'Número:'); }}
	{{ Form::text('numero', $cv->numero ,array('class'=>'form-control','placeholder'=>'Digite seu número')) }}
	<p class="text-danger">{{ $errors->first('numero') }}</p> <p></p>
	</div>
	<div class="col-xs-6">	
	{{  Form::label('cep', 'CEP:'); }}
	{{ Form::text('cep', $cv->cep ,array('class'=>'form-control cep','placeholder'=>'Digite seu cep')) }}
	<p class="text-danger">{{ $errors->first('cep') }}</p>
	</div>
	
	
	
	</div>
	
	<div class="form-group">
	
	<div class="col-xs-6">	
	
	{{  Form::label('estado', 'Estado:'); }}
	{{ Form::text('estado', $cv->estado ,array('class'=>'form-control','placeholder'=>'Digite seu estado')) }} <p></p>	
	</div>
	
	<div class="col-xs-6">	
	{{  Form::label('pais', 'País:'); }}
	{{ Form::text('pais', $cv->pais ,array('class'=>'form-control','placeholder'=>'Digite seu pais')) }} <p></p>	
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