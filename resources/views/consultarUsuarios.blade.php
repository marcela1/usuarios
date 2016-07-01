<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta de Usuarios</title>
	<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 well">
				<h1>Lista de Usuarios</h1>
				<a href="{{url('registrarUsuario')}}" class="btn btn-success">Nuevo usuario
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</a>
			</div>
		</div>
		<dir class="row">
			<div class="col-xs-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Edad</th>
							<th>Correo</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($usuarios as $u)
						<tr>
							<td>{{$u->id}}</td>
							<td>{{$u->nombre}}</td>
							<td>{{$u->edad}}</td>
							<td>{{$u->correo}}</td>
							<td>
								<a class="btn btn-danger btn-xs" href="{{url('eliminarUsuario')}}/{{$u->id}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</a>
								<a class="btn btn-primary btn-xs" href="{{url('/modificarUsuario')}}/{{$u->id}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Editar</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</dir>
	</div>
</body>
</html>