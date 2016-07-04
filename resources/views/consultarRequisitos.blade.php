<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta de Requisitos</title>
	<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 well">
				<h1>Lista de Requisitos</h1>
				<a href="{{url('registrarRequisito')}}" class="btn btn-success">Nuevo Requisito
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
							<th>Descripcion</th>
							<th>Prioridad</th>
							<th>Horas</th>
							<th>Eliminar</th>
							<th>Editar</th>
							<th>PDF</th>
						</tr>
					</thead>
					<tbody>
						@foreach($requisitos as $r)
						<tr>
							<td>{{$r->id}}</td>
							<td>{{$r->descripcion}}</td>
							<td>{{$r->prioridad}}</td>
							<td>{{$r->horas}}</td>
							
							<td>
								<a class="btn btn-danger btn-xs" href="{{url('eliminarRequisito')}}/{{$r->id}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</a>
							</td>
							<td>
								<a class="btn btn-primary btn-xs" href="{{url('/modificarRequisito')}}/{{$r->id}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Editar</a>
							</td>
							<td>
								<a href="{{ url('/pdfRequisito')}}/{{$r->id}}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
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