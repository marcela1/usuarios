@extends('master')
@section('encabezado')
<h1>Modificar Proyecto</h1>
@stop
@section('contenido')
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
@stop