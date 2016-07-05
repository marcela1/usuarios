@extends('master')
@section('encabezado')
<h1>Registro de Proyectos</h1>
@stop
@section('contenido')
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
@stop