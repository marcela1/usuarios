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
						<input class="btn btn-primary"type="submit" value="Mostrar">
					</div>
					
				</form>
		
			<div class="col-xs-12 ">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Descripcion</th>
							<th>PDF</th>
						</tr>
					</thead>
					<tbody>
						@foreach($proyectos as $p)
							<tr>
								<td>{{$p->id}}</td>
								<td>{{$p->descripcion}}</td>
								<td><a href="{{ url('/pdfProyectosRequisitos')}}/{{$p->id}}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a></td>
							
								

							</tr>

							@endforeach
						
					</tbody>
				</table>
@stop