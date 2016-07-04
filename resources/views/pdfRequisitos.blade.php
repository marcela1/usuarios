<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Requisitos</title>
</head>
<body>
	<h1>Listado de Requisitos por Usuario </h1>

	<h2>Usuario: {{$usuarios->nombre}} </h2>
	<hr>	
	@if($requisitos!=null)
	<table>
		<tr>
			<td>Descripcion</td>
			<td>Prioridad</td>
		</tr>
	
		@foreach($requisitos as $r)
		<tr>
			<td>{{$r->descripcion}}</td>
			<td>{{$r->prioridad}}</td>
		</tr>
		@endforeach
		
		
	</table>
	@else
		
		<h2>No hay requisitos asignados</h2>
	@endif
		
</body>
</html>