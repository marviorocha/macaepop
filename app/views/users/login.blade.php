			@extends('layouts.main')
			

		@section('bartop')
		
		
		<div class="center wow">
		<fieldset>
		
		
		
		<h2>Login</h2>
	 
		
		
		</div>
		
		
		@stop



			@section('content')
			
			
			<div class="container">
			
			<div class="row" >
			
			<div class="col-md-6 col-md-offset-3">
			
			@if (Session::has('message'))
			<div class="alert alert-danger" role="alert">	<p>{{ Session::get('message') }}	</p></div> 
			@endif
			
			
			
			
			<div class="panel panel-default">
			
			<div class="panel-body">
			
			{{ Form::open(array('url' => 'users/login','pos')) }}
			
			
			
			
			
			<!-- Email field -->
			<div class="form-group">
			<label for="email">E-mail:</label>
			{{ Form::text('email', null, ['placeholder' => 'E-mail', 'class' => 'form-control',])}}
			
			</div>
			<!-- Password field -->
			<div class="form-group">
			<label for="email">Senha:</label>
			{{ Form::password('password', ['placeholder' => 'Senha (seis ou mais caracteres)', 'class' => 'form-control', ])}}
			
			</div>
			
			<!-- Submit field -->
			<div class="form-group">
			{{ Form::submit('Entrar', ['id'=>'loading', 'class' => 'btn btn-lg btn-primary btn-block','data-loading-text'=>'<i class="fa fa-user"></i> Carregando...']) }}
			</div>
			</fieldset>
			{{ Form::close() }}
			</div>
			</div>
			<p style="text-align:center">  {{ HTML::link('/users/login','Esqueceu sua senha?')}} |  Ainda não é cadastrado? {{ HTML::link('/users/login','Cadastre-se agora')}} </p>
			</div>
			</div>
			</div>	<!-- end div contener -->
			<script>
  $('#loading').click(function () {
    var btn = $(this)
    btn.button('loading')
    $.ajax(...).always(function () {
      btn.button('reset')
    });
  });
</script>
			@stop

