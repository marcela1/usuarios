@extends('master')
@section('encabezado')
<h1>Registrar Nuevo Cliente</h1>
@stop
@section('contenido')
		<div class="row">
			<div class="col-xs-12">
				<form action="{{url('/guardarCliente')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">


					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" name="nombre">

					</div>
					<div class="form-group">
						<label for="telefono">Telefono</label>
						<input type="text" class="form-control" name="telefono">

					</div>
					<div class="form-group">
						<label for="correo">Correo</label>
						<input type="text" class="form-control" name="correo">

					</div>
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/clientes')}}" class="btn btn-danger"> Cancelar</a>
				</form>
			</div>
		</div>
@stop