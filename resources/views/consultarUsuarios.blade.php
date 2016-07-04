@extends('master')
@section('encabezado')
<h1>Gestion de usuarios</h1>
@stop
@section('contenido')
<a href="{{url('/registrarUsuario')}}" class="btn btn-success">Nuevo Usuario</a>
<span class="glyphicon glyphicon-pluss" aria-hidden="true"></span>

				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Edad</th>
							<th>Correo</th>
							<th>Eliminar</th>
							<th>Editar</th>
							<th>PDF</th>
						</tr>
					</thead>
					<tbody>
						@foreach($usuarios as $u)
						<tr>
							<td>{{$u->id}}</td>
							<td>{{$u->nombre}}</td>
							<td>{{$u->edad}}</td>
							<td>{{$u->correo}}</td>
							<td>
								<a class="btn btn-danger btn-xs" href="{{url('eliminarUsuario')}}/{{$u->id}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</a>
					
						   	</td>
						   	<td>
						   		<a class="btn btn-primary btn-xs" href="{{url('/modificarUsuario')}}/{{$u->id}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Editar</a>
						   	</td>
						   	<td>
						   		<a href="{{ url('/pdfUsuarios')}}/{{$u->id}}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
						   	</td>
						</tr>
						@endforeach
					</tbody>
				</table>
@stop