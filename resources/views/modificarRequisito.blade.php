@extends('master')
@section('encabezado')
<h1>Modificar Requisito</h1>
@stop
@section('contenido')
		<div class="row">
			<div class="col-xs-12">
				<form action="{{url('/actualizarRequisito')}}/{{$requisitos->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">

					<div class="form-group">
						<label for="descripcion">Descripcion</label>
						<input value="{{$requisitos->descripcion}}" type="text" class="form-control" name="descripcion">

					</div>
					<div class="form-group">
						<label for="prioridad">Prioridad</label>
						<input value="{{$requisitos->prioridad}}" type="text" class="form-control" name="prioridad">

					</div>
					<div class="form-group">
						<label for="horas">Horas</label>
						<input value="{{$requisitos->horas}}" type="text" class="form-control" name="horas">

					</div>
						
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/requisitos')}}" class="btn btn-danger"> Cancelar</a>
				</form>
			</div>
		</div>
@stop