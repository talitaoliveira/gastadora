@extends('principal')

@section('container')

<form name="" action="/categoria/adicionar" method="post" >

	<input value="{{ csrf_token() }}" type="hidden" name="_token">

	<div class="form-group">
		<label>Titulo:</label>
		<input type="" name="nome" class="form-control">
	</div>

	<button type="submit" class="btn btn-primary">Adicionar</button>
</form>

@stop