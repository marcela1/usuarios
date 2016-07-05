@extends('master')
@section('encabezado')
<h1>Lista de Proyectos</h1>
@stop
@section('contenido')
				<a href="{{url('registrarProyecto')}}" class="btn btn-success">Nuevo Proyecto
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</a>
			</div>
		</div>
		<dir class="row">
			<div class="col-xs-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Descripcion</th>
							<th>ID Cliente</th>
							<th>Eliminar</th>
							<th>Editar</th>
							<th>PDF</th>
						</tr>
					</thead>
					<tbody>
						@foreach($proyectos as $p)
						<tr>
							<td>{{$p->id}}</td>
							<td>{{$p->descripcion}}</td>
							<td>{{$p->nombre}}</td>
							
							<td>
								<a class="btn btn-danger btn-xs" href="{{url('eliminarProyecto')}}/{{$p->id}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</a>
							</td>
							<td>
								<a class="btn btn-primary btn-xs" href="{{url('/modificarProyecto')}}/{{$p->id}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Editar</a>
							</td>
							<td>
								<a href="{{ url('/pdfProyectos')}}/{{$p->id}}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</dir>
@stop