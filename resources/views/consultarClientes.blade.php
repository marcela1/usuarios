<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta de Clientes</title>
	<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 well">
				<h1>Lista de Clientes</h1>
				<a href="{{url('registrarCliente')}}" class="btn btn-success">Nuevo Cliente
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
							<th>Telefono</th>
							<th>Correo</th>
							<th>Eliminar</th>
							<th>Editar</th>
							<th>PDF</th>
						</tr>
					</thead>
					<tbody>
						@foreach($clientes as $c)
						<tr>
							<td>{{$c->id}}</td>
							<td>{{$c->nombre}}</td>
							<td>{{$c->telefono}}</td>
							<td>{{$c->correo}}</td>
							<td>
								<a class="btn btn-danger btn-xs" href="{{url('eliminarCliente')}}/{{$c->id}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</a>
								
							</td>
							<td>
								<a class="btn btn-primary btn-xs" href="{{url('/modificarCliente')}}/{{$c->id}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Editar</a>
							</td>
							<td>
							<a href="{{ url('/pdfClientes')}}/{{$c->id}}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
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