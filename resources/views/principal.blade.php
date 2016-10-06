<!DOCTYPE html>
<html>
<head>
	<title>Gastadora</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome-4.6.3/css/font-awesome.css">
</head>
<body>
	<div class="container">
		<h1>Gastadora</h1>
		<ol class="breadcrumb">
			<li class="active"><a href="/" class="menu-home">Home</a></li>
			<li><a href="/categorias" class="menu-categorias">Categorias</a></li>
			<li><a href="/conta-pagar" class="menu-conta-pagar">Contas a pagar</a></li>
			<li><a href="/conta-receber" class="menu-conta-receber">Contas a Receber</a></li>
		</ol>
		@if(isset($migalha['controller']))
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" href="#">{{$migalha['controller']}}</a>
					@if(isset($migalha['acao_atual']))
					<a class="navbar-brand" href="#">{{$migalha['acao_atual']}}</a>
					@endif
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						@if(isset($migalha['acao_disponivel']))
						<li><a href="#">{{$migalha['acao_disponivel']}}</a></li>
						@endif
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		@endif
		@yield('container')
	</div>
</body>
</html>