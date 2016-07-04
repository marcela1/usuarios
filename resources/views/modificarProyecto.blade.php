<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Proyecto</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 well">
				<h1>Modificar Proyecto</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<form action="{{url('/actualizarProyecto')}}/{{$proyectos->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">

					<div class="form-group">
						<label for="descripcion">Descripcion</label>
						<input value="{{$proyectos->descripcion}}" type="text" class="form-control" name="descripcion">

					</div>
					<div class="form-group">
						<label for="id_cliente">ID Clientes</label>
						<input value="{{$proyectos->id_cliente}}" type="text" class="form-control" name="id_cliente">

					</div>
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/proyectos')}}" class="btn btn-danger"> Cancelar</a>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>