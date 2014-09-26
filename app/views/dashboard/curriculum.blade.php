
@extends('layouts.dashboard')

@section('content')

<section id="blog" class="container">
<div class="center">
<h2>Editar meu  curriculum</h2>
<p class="lead"><b>{{ $user->first_name }}</b>, esse é um passo importante para sua carreira profissional. <br> Recomendamos que verifique com atenção todos as palavras em português. Boa sorte!</p>
</div>

<div class="blog">
<div class="row">
<div class="col-md-8">
<div class="blog-item">
<div class="row">


<div class="col-xs-12 col-sm-11 blog-content">


<h2><a href="blog-item.html"><i class="fa fa-file-text-o"></i>Meu Curriculum</a></h2>

<h3>

{{ Form::open( array('url'=>'dashbord/curriculum','pos')) }}

{{ Form::hidden('id',  $cv->id ) }}


<div class="panel panel-default">
<div class="panel-body">
<div class="form-group">
<div class="col-xs-12"> 
{{  Form::label('titulo', 'Titulo Profissional:'); }}
{{ Form::text('profissional', $cv->profissional ,array('class'=>'form-control ','placeholder'=>'Informe em poucas palavras seu objetivo')) }}
<p class="text-danger">{{ $errors->first('profissional') }}</p>
</div>
</div>
</div>
</div>
<!-- final da div tables para o titulos -->




<div class="col-xs-12"> 
{{  Form::label('formacao', 'Formação Acadêmica:'); }}
{{ Form::textarea('formacao', $cv->formacao ,array('class'=>'form-control curriculum','placeholder'=>'Digite aqui sobre sua formação, escolaridade..,')) }} <p></p> 
</div>



<div class="col-xs-12"> 
{{  Form::label('experiencia', 'Experiência Profissional:'); }}
{{ Form::textarea('experiencia', $cv->experiencia ,array('class'=>'form-control curriculum','placeholder'=>'Digite aqui sobre sua experiência profissional')) }} <p></p>  
</div>
<p></p>
<div class="clearfix"> <p></p> </div> 

<div class="panel panel-default">
<div class="panel-body">
<div class="form-group">
<div class="col-xs-8">
{{ Form::label('cursos','Cursos:') }}
{{ Form::text('cursos',$cv->cursos, ['class'=>'idioma form-control','data-role'=>'tagsinput','placeholder'=>'Tags']) }} <br>
<i class="fa fa-info-circle"></i> <span class="text-warning">Digite as informações separando com uma vírgula</span>
 <p></p>
</div>
</div>
</div>
</div>  


<div class="panel panel-default">
<div class="panel-body">
<div class="form-group">
<div class="col-xs-8">
{{ Form::label('idioma','Idioma:') }}

 

{{ Form::text('idioma',$cv->idioma, ['class'=>'idioma form-control','data-role'=>'tagsinput','placeholder'=>'Tags']) }} <br>
<i class="fa fa-info-circle"></i> <span class="text-warning">Digite as informações separando com uma vírgula</span> <p></p>
 

</div>
</div>
</div>
</div>  





<div class="panel panel-default">
<div class="panel-body">
<div class="form-group">

<div class="col-xs-12"> 
{{  Form::label('outros', 'Outros:'); }}
{{ Form::textarea('outros', $cv->outros ,array('class'=>'form-control','size'=>'30x2','placeholder'=>'Digite aqui sobre outras informações')) }}  <p></p>

</div>
</div>  
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






@stop             

@include('dashboard.widget')


</section><!--/#blog-->