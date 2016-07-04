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
			<td>Edad</td>
			<td>Correo</td>
		</tr>
	
	
		<tr>
			<td>{{$usuarios->id}}</td>
			<td>{{$usuarios->nombre}}</td>
			<td>{{$usuarios->edad}}</td>
			<td>{{$usuarios->correo}}</td>
		</tr>
		
		
		
	</table>

		
</body>
</html>