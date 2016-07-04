<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Asignar Requisitos</title>
	<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 well">
				<h1>Asignar requisitos a Usuarios</h1>
				
			</div>
		</div>
		<dir class="row">
			<div class="col-xs-12 well">
				<form action="{{ url('/seleccionarRequisitos')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
					
					<div class="form-group">
						<label for="">Usuarios</label>
						<select class="form-control"name="usuarios" id="">
							@foreach($usuarios as $u)
							<option value="{{$u->id}}">{{$u->nombre}}</option>
							@endforeach
						</select>
						<input class="btn btn-primary"type="submit" value="Mostrar">
					</div>
					
				</form>
			</div>
			<div class="col-xs-12 ">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>PDF</th>
						</tr>
					</thead>
					<tbody>
						@foreach($usuarios as $u)
							<tr>
								<td>{{$u->id}}</td>
								<td>{{$u->nombre}}</td>
								<td><a href="{{ url('/pdfRequisitos')}}/{{$u->id}}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a></td>
							
								

							</tr>

							@endforeach
						
					</tbody>
				</table>
			</div>
		</dir>
	</div>
</body>
</html>