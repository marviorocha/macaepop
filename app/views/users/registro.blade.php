	@extends('layouts.main')
	
	@section('bartop')
	
	
	<div class="center wow fadeInDown">
	<fieldset>
	
	
	
	<h2>Começe agora é de graça!</h2>
	<p class="lead">Macaé POP é de graça! Cadastre-se leva menos de 1 minuto<br> busque emprego, crie, edite e envie curriculum. </p>
	
	
	</div>
	
	
	@stop
	
	
	
	@section('content')
	
	
	<div class="container">
	
	<div class="row" >
	
	<div class="col-md-6 col-md-offset-3">
	
	
	
	
	<!-- 
	<div class="alert alert-danger" role="alert">{{ Session::get('name') }}</div> 
	-->
	
	
	
	<div class="panel panel-default">
	
	<div class="panel-body">
	
	{{ Form::open(array('url' => 'users/create','pos')) }}
	
	
	
 
	
	
	
	
	<!-- First name field -->
	<div class="form-group">
	<div class="row">
	<div class="col-xs-6">
	<label for="name">Nome:</label>
	{{ Form::text('name', null, ['placeholder' => 'Nome', 'class' => 'form-control', ])}}
	<span class="text-danger">{{ $errors->first('name') }} </span>  </div>
	<div class="col-xs-6">
	<label for="lastname">Sobrenome:</label>
	{{ Form::text('lastname', null, ['placeholder' => 'Sobrenome', 'class' => 'form-control form-inline', ])}}
	<span class="text-danger">{{ $errors->first('lastname') }} </span>  </div>
	</div>
	
	
	
	
	</div>
	<!-- Email field -->
	<div class="form-group">
	<label for="email">E-mail:</label>
	{{ Form::text('email', null, ['placeholder' => 'E-mail', 'class' => 'form-control',])}}
	<span class="text-danger">{{ $errors->first('email') }} </span> 
	</div>
	<!-- Password field -->
	<div class="form-group">
	<label for="email">Senha:</label>
	{{ Form::password('password', ['placeholder' => 'Senha (seis ou mais caracteres)', 'class' => 'form-control', ])}}
	<span class="text-danger">{{ $errors->first('password') }} </span> 
	</div>
	<!-- Password Confirmation field -->
	<div class="form-group">
	<label for="email">Confirma Senha:</label>
	{{ Form::password('password_confirmation', ['placeholder' => 'Senha novamente', 'class' => 'form-control', ])}}
	<span class="text-danger">{{ $errors->first('password_confirmation') }} </span> 
	</div>
	
	
	<!-- Submit field -->
	<div class="form-group">
	{{ Form::submit('Cadastre-se agora', ['class' => 'btn btn-lg btn-primary btn-block']) }}
	</div>
	</fieldset>
	{{ Form::close() }}
	</div>
	</div>
	<p style="text-align:center">Já é cadastrado? {{ HTML::link('/users/login','Faça login no Macaé POP')}} </p>
	</div>
	</div>
	</div>	<!-- end div contener -->
	
	@stop		
	
	
	
	@section('barbutton')
	
	@stop