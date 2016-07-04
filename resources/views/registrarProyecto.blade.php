<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de Nuevo Proyecto</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 well">
				<h1>Registro de Proyectos</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<form action="{{url('/guardarProyecto')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">


					<div class="form-group">
						<label for="descripcion">Descripcion</label>
						<input type="text" class="form-control" name="descripcion">

					</div>
					<div class="form-group">
						<label for="id_cliente">ID Cliente</label>
						<input type="text" class="form-control" name="id_cliente">

					</div>
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/proyectos')}}" class="btn btn-danger"> Cancelar</a>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>