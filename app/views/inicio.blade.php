@extends('plantilla')
@section('contenido')
<div class="jumbotron">
	<h1>Tienda</h1>
	<p class="lead">Se pueden crear vendedores y productos en sus secciones</p>
</div>
<div class="row marketing">
  <!-- Aqui listamos todo los vendedores -->
  @foreach($vendedores as $vendedor)	
	<div class="panel panel-primary">
		<div class="panelheading">{{ $vendedor->nombre.' '.$vendedor->apellido}}</div>
		<ul class="list-group">
			<!-- aqui esta la lsita de todo los productos -->
			@foreach($vendedor->productos as $producto)
			<li class="list-group-item">{{ $producto->descripcion.' '.$producto->precio}}</li>
			@endforeach
		</ul>
	</div>
  @endforeach	
</div>
@stop