@extends('layouts.curriculum')

@section('content')

<section id="" class="container">
 

 
<div class="blog">
<div class="row">


<div class="col-md-9">
<div class="blog-item">
<div class="row">




<div class="row clearfix">




<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
<div class="media">
<div class="pull-left">
<a href="#">{{ HTML::image($cv->foto,'foto',['class'=>'']) }}</a>

</div>
<div class="media-body">

<h2>{{ $user->first_name }} {{ $user->last_name }}</h2>

<p class="lead">{{ $cv->descricao }}</p>
<table class="table table-user-information">
<tbody>
<tr>
<td>Profissional:</td>
<td> <i class="fa fa-briefcase"></i> {{ $cv->profissional }}</td>
</tr>
<tr>
<td>Última atualização:</td>
<td>{{ date('d/m/Y - H:i:s', strtotime($cv->updated_at)) }}</td>
</tr>
 
<td>Home Address</td>
<td><i class="fa fa-map-marker"></i> {{ $cv->endereco }}, nº {{ $cv->numero }}. {{ $cv->bairro }},
<br> {{ $cv->cidade }} - {{ $cv->estado }} CEP: {{ $cv->cep }} </td>
</tr>
<tr>
<td>E-mail</td>
<td><a href="mailto:"><i class="fa fa-lock"></i> Sem permissão</a></td>
</tr>
<td>Telefone:</td>
<td>{{ $cv->telefone }} (fixo)<br>{{ $cv->celular }} (Celular)
</td>

</tr>

</tbody>
</table>

<hr>
<h2>Formação Acadêmica</h2>
<h3>{{ $cv->formacao }}</h3>

<h2>Experiência</h2>
<h3>{{ $cv->experiencia }}</h3>

<h2>Idioma</h2>
<div class="tags">

<ul class="tag-cloud">
@foreach (explode(',',$cv->idioma) as $idiomas)
<li> <span class="label label-primary">{{ $idiomas }}</span></li>
@endforeach 

</ul>
</div> 


<h2>Cursos</h2>
<div class="tags">

<ul class="tag-cloud">
@foreach (explode(',',$cv->curso) as $curso)
<li> <span class="label label-primary">{{ $curso }}</span></li>
@endforeach 

</ul>
</div> 


<h2>Outros</h2>
<h3>{{ $cv->outros }}</h3>

</div><!--/.media -->

</div>
</div><!--/.col-lg-4 -->


</div>
<p></p>
 <div class="col-xs-4 a2a_kit a2a_kit_size_32 a2a_default_style">
 
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
<a class="a2a_button_linkedin"></a>
<a class="a2a_button_printfriendly"></a>
</div>
	
</div>
 
<script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
@stop             
 
</section><!--/#blog-->



