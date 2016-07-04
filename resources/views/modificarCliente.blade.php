<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Clientes</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 well">
				<h1>Modificar Cliente</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<form action="{{url('/actualizarCliente')}}/{{$clientes->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">


					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input value="{{$clientes->nombre}}" type="text" class="form-control" name="nombre">

					</div>
					<div class="form-group">
						<label for="telefono">Telefono</label>
						<input value="{{$clientes->telefono}}" type="text" class="form-control" name="telefono">

					</div>
					<div class="form-group">
						<label for="correo">Correo</label>
						<input value="{{$clientes->correo}}" type="text" class="form-control" name="correo">

					</div>
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/clientes')}}" class="btn btn-danger"> Cancelar</a>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>