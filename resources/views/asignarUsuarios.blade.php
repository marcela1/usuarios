<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Asignar Usuarios</title>
	<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 well">
				<h1>Asignar usuario a proyectos</h1>
				
			</div>
		</div>
		<dir class="row">
			<div class="col-xs-12 well">
				<form action="{{ url('/seleccionarUsuarios')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
					
					<div class="form-group">
						<label for="">Proyectos</label>
						<select class="form-control"name="proyectos" id="">
							@foreach($proyectos as $p)
							<option value="{{$p->id}}">{{$p->descripcion}}</option>
							@endforeach
						</select>
						<input class="btn btn-primary"type="submit" value="Mostrar">
					</div>
					
				</form>
			</div>
		</dir>
	</div>
</body>
</html>