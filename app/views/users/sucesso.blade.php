@extends('layouts.main')

@section('content')
	<div class="row">
	
	<div class="col-md-6 col-md-offset-2">
@if (Session::has('flash_message'))

<div class="alert alert-success" role="alert">{{ Session::get('flash_message') }}</div> 

@endif
 <h1> </h1>

</div>
</div>

@stop