@extends('master')
@section('encabezado')
<h1>Asignar Requisitos a Proyectos</h1>
@stop
@section('contenido')
	
			
				<form action="{{ url('/seleccionarProyectosRequisitos')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
					<div class="form-group">
						<label for="">Proyectos</label>
						<select class="form-control"name="proyectos" id="">
							@foreach($proyectos as $p)
							<option value="{{$p->id}}">{{$p->descripcion}}</option>
							@endforeach
						</select>
						<input class="btn btn-primary" type="submit" value="Mostrar">
					
					</div>
				</form>
				<form action="{{ url('/actualizarProyectosRequisitos')}}/{{$id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Descripcion</th>
								<th>Prioridad</th>
								<th>Horas</th>
								<th>Seleccionar</th>
							</tr>
						</thead>
						<tbody>
							@foreach($requisitos as $r)
							<tr>
								<td>{{$r->id}}</td>
								<td>{{$r->descripcion}}</td>
								<td>{{$r->prioridad}}</td>
								<td>{{$r->horas}}</td>
								<td><input type="checkbox"name="seleccionado[]" value="{{$r->id}}" ></td>

							</tr>

							@endforeach
							<tr class="text-right">
								<td colspan="5">
								<input type="submit" value="Agregar" class="btn btn-success">
								<a href="{{url('/asignarProyectosRequisitos')}}" class="btn btn-danger"> Cancelar</a>

								</td>
							</tr>
						</tbody>

					</table>
					
			
		
@stop