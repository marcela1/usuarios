@extends('master')
@section('encabezado')
<h1>Gestion de Clientes</h1>
@stop
@section('contenido')
	
				<a href="{{url('registrarCliente')}}" class="btn btn-success">Nuevo Cliente
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</a>
			
		
		<dir class="row">
			<div class="col-xs-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Telefono</th>
							<th>Correo</th>
							<th>Eliminar</th>
							<th>Editar</th>
							<th>PDF</th>
						</tr>
					</thead>
					<tbody>
						@foreach($clientes as $c)
						<tr>
							<td>{{$c->id}}</td>
							<td>{{$c->nombre}}</td>
							<td>{{$c->telefono}}</td>
							<td>{{$c->correo}}</td>
							<td>
								<a class="btn btn-danger btn-xs" href="{{url('eliminarCliente')}}/{{$c->id}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</a>
								
							</td>
							<td>
								<a class="btn btn-primary btn-xs" href="{{url('/modificarCliente')}}/{{$c->id}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Editar</a>
							</td>
							<td>
							<a href="{{ url('/pdfClientes')}}/{{$c->id}}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
							</td>

						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</dir>
@stop