@extends('principal')

@section('container')

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		<a class="navbar-brand" href="#">{{$controller}}</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Adicionar</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<table class="table table-bordered">
	<thead>
		<tr>
			<th width="1%">#</th>
			<th>Titulo</th>
			<th width="8%"></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Alimentação</td>
			<td>
				<a>
					<i class="fa fa-search" aria-hidden="true"></i>
				</a>
				<a>
					<i class="fa fa-trash" aria-hidden="true"></i>
				</a>
			</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Alimentação</td>
			<td>
				<a>
					<i class="fa fa-search" aria-hidden="true"></i>
				</a>
				<a>
					<i class="fa fa-trash" aria-hidden="true"></i>
				</a>
			</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Alimentação</td>
			<td>
				<a>
					<i class="fa fa-search" aria-hidden="true"></i>
				</a>
				<a>
					<i class="fa fa-trash" aria-hidden="true"></i>
				</a>
			</td>
		</tr>
	</tbody>
</table>
@stop
