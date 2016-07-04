<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de Nuevo Requisito</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 well">
				<h1>Registro de Requisitos</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<form action="{{url('/guardarRequisito')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">

					
					<div class="form-group">
						<label for="descripcion">Descripcion</label>
						<input type="text" class="form-control" name="descripcion">

					</div>
					<div class="form-group">
						<label for="prioridad">Prioridad</label>
						<input type="text" class="form-control" name="prioridad">

					</div>
					<div class="form-group">
						<label for="horas">Horas</label>
						<input type="text" class="form-control" name="horas">

					</div>
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/requisitos')}}" class="btn btn-danger"> Cancelar</a>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>