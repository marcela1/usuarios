<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Informacion del Usuario</title>


</head>
<body>
	<h1>Informacion del Usuario </h1>

	
	<hr>	
	
	<table >
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Telefono</td>
			<td>Correo</td>
		</tr>
	
	
		<tr>
			<td>{{$clientes->id}}</td>
			<td>{{$clientes->nombre}}</td>
			<td>{{$clientes->telefono}}</td>
			<td>{{$clientes->correo}}</td>
		</tr>
		
		
		
	</table>

		
</body>
</html>