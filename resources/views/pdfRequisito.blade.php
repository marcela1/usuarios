<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Informacion Requisito</title>
</head>
<body>
	<h1>Informacion Requisito </h1>

	
	<table >
		<tr>
			<td>ID</td>
			<td>Descripcion</td>
			<td>Prioridad</td>
			<td>Horas</td>
		</tr>
	
	
		<tr>
			<td>{{$requisitos->id}}</td>
			<td>{{$requisitos->descripcion}}</td>
			<td>{{$requisitos->prioridad}}</td>
			<td>{{$requisitos->horas}}</td>
		</tr>
		
		
		
	</table>
		
</body>
</html>