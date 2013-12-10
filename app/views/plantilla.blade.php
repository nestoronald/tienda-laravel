<html>
	<head>
		<title>Tienda</title>
		<!-- incluimos el css de bootstrap -->
		{{HTML::style('css/bootstrap.min.css')}}
		{{HTML::style('css/jumbotron-narrow.css')}}
	</head>
	<body>
		<div class="container">
			<div class="header">
				<ul class="nav nav-pills pullright">
					<li>{{HTML::link('/','Inicio')}}</li>
					<li>{{HTML::link('vendedor','Vendedores')}}</li>
					<li>{{HTML::link('producto','Productos')}}</li>
					<h3 class="text-muted"></h3>
				</ul>
			</div>
			@yield('contenido')
			<!-- aqui se incluiran los códigos d elas vistas que use cada metodo de los controladores -->
			<div class="footer">
				<p>&copy; Ro 2013</p>
			</div>
		</div>
		<script src="http://code.jquery.com/jquery.js"></script>
		{{HTML::script('js/boostrap.min.js')}}
	</body>
</html>