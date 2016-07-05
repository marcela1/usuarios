<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Usuario;

use App\Proyecto;
use DB;
use App\usuarios_proyectos;
use App\Cliente;
use App\Requisito;
use App\Usuarios_Requisitos;
use App\Proyecto_Requisito;
class ejemploController extends Controller
{

	public function index($nombre, $edad){
		return view('home', compact('nombre','edad'));

	}
	public function mostrarUsuarios(){
		$usuarios=Usuario::all();
		//traer la informacion de la tabla
		//dd($usuarios);
		return view('consultarUsuarios', compact('usuarios'));

	}
	public function eliminarUsuario($id){
		//dd($ID);
		Usuario::find($id)->delete();
		return Redirect('/usuarios');

	}
	public function registrarUsuario(){
		return view('registrarUsuario');
	}
	public function guardarUsuario(Request $request){
	
		//dd($request);
		$usuario= new Usuario();
		$usuario->nombre=$request->input('nombre');
		$usuario->edad=$request->input('edad');
		$usuario->correo=$request->input('correo');
		$usuario->save();
		return Redirect('/usuarios');
		//dd($nombre. " ".$edad. " ".$correo);

	}
	public function modificarUsuario($id){
		$usuario=Usuario::find($id);
		return view('modificarUsuario', compact('usuario'));
	}
	public function actualizarUsuario($id, Request $request ){
		$usuario=Usuario::find($id);
		$usuario->nombre=$request->input('nombre');
		$usuario->edad=$request->input('edad');
		$usuario->correo=$request->input('correo');
		$usuario->save();
		return Redirect('/usuarios');

	}
	

	public function mostrarClientes(){
		$clientes=Cliente::all();
		//traer la informacion de la tabla
		//dd($usuarios);
		return view('consultarClientes', compact('clientes'));

	}
	public function eliminarClientes($id){
		//dd($id);
		Cliente::find($id)->delete();
		return Redirect('/clientes');

	}
	public function registrarCliente(){
		return view('registrarCliente');
	}
	public function guardarCliente(Request $request){
	
		//dd($request);
		$clientes= new Cliente();
		$clientes->nombre=$request->input('nombre');
		$clientes->telefono=$request->input('telefono');
		$clientes->correo=$request->input('correo');
		$clientes->save();
		return Redirect('/clientes');
		//dd($nombre. " ".$edad. " ".$correo);

	}
	public function modificarCliente($id){
		$clientes=Cliente::find($id);
		return view('modificarCliente', compact('clientes'));
	}
		public function actualizarCliente($id, Request $request ){
		$clientes=Cliente::find($id);
		$clientes->nombre=$request->input('nombre');
		$clientes->telefono=$request->input('telefono');
		$clientes->correo=$request->input('correo');
		$clientes->save();
		return Redirect('/clientes');

	}



	public function mostrarProyectos(){
		$proyectos=Proyecto::all();
		//traer la informacion de la tabla
		//dd($usuarios);
		return view('consultarProyectos', compact('proyectos'));

	}
	public function eliminarProyecto($id){
		//dd($id);
		Proyecto::find($id)->delete();
		return Redirect('/proyectos');

	}
	public function registrarProyecto(){
		return view('registrarProyecto');
	}
	public function guardarProyecto(Request $request){
	
		//dd($request);
		$proyectos= new Proyecto();
		$proyectos->descripcion=$request->input('descripcion');
		$proyectos->id_cliente=$request->input('id_cliente');
		$proyectos->save();
		return Redirect('/proyectos');
		//dd($nombre. " ".$edad. " ".$correo);

	}
	public function modificarProyecto($id){
		$proyectos=Proyecto::find($id);
		return view('modificarProyecto', compact('proyectos'));
	}
		public function actualizarProyecto($id, Request $request ){
		$proyectos=Proyecto::find($id);
		$proyectos->descripcion=$request->input('descripcion');
		$proyectos->id_cliente=$request->input('id_cliente');
		$proyectos->save();
		return Redirect('/proyectos');

	}



	public function mostrarRequisitos(){
		$requisitos=Requisito::all();
		//traer la informacion de la tabla
		//dd($usuarios);
		return view('consultarRequisitos', compact('requisitos'));

	}
	public function eliminarRequisito($id){
		//dd($id);
		Requisito::find($id)->delete();
		return Redirect('/requisitos');

	}
	public function registrarRequisito(){
		return view('registrarRequisito');
	}
	public function guardarRequisito(Request $request){
	
		//dd($request);
		//dd($nombre. " ".$edad. " ".$correo);
		$requisitos= new Requisito();
		$requisitos->descripcion=$request->input('descripcion');
		$requisitos->prioridad=$request->input('prioridad');
		$requisitos->horas=$request->input('horas');
		$requisitos->save();
		return Redirect('/requisitos');
		

	}
	public function modificarRequisito($id){
		$requisitos=Requisito::find($id);
		return view('modificarRequisito', compact('requisitos'));
	}
		public function actualizarRequisito($id, Request $request ){
		$requisitos=Requisito::find($id);
		$requisitos->descripcion=$request->input('descripcion');
		$requisitos->prioridad=$request->input('prioridad');
		$requisitos->horas=$request->input('horas');
		$requisitos->save();
		return Redirect('/requisitos');

	}



	public function asignarUsuarios(){

		$proyectos=Proyecto::all();
		return view('asignarUsuarios', compact('proyectos'));
	}
	public function seleccionarUsuarios(Request $request){
		$proyectos=Proyecto::all();
		$id=$request->input('proyectos');
		//dd($id);
		$lista=DB::table('usuarios_proyectos')->where('id_proyecto', '=', $id)->lists('id_usuario');
		$usuarios=DB::table('usuarios')->whereNotIn('id',$lista)->orderBy('id','asc')->get();
		//dd($usuarios);
		return view('seleccionarUsuarios', compact('proyectos','usuarios','id'));
		
	}
	public function actualizarUsuariosProyectos(Request $request, $id){
		$usuarios=$request->input('seleccionado');
		foreach ($usuarios as $u) {
			//print($u);
			$registro=new usuarios_proyectos();
			$registro->id_usuario=$u;
			$registro->id_proyecto=$id;
			$registro->save();
			
		}
		return Redirect('/asignarUsuarios');
	}
	public function pdfProyectos($id){
		$lista=DB::table('usuarios_proyectos')->where('id_proyecto', '=', $id)->lists('id_usuario');
		$usuarios=DB::table('usuarios')->whereIn('id',$lista)->orderBy('id','asc')->get();
		$proyectos=Proyecto::find($id);
		
	
		$vista=view('pdfProyectos', compact('usuarios','proyectos'));
		$dompdf=\App::make('dompdf.wrapper');
		$dompdf->loadHTML($vista);
		return $dompdf->stream();
	}

		public function pdfUsuarios($id){

		$usuarios=Usuario::find($id);
		$vista=view('pdfUsuarios', compact('usuarios'));
		$dompdf=\App::make('dompdf.wrapper');
		$dompdf->loadHTML($vista);
		return $dompdf->stream();
	
	}
	public function pdfClientes($id){

		$clientes=Cliente::find($id);
		$vista=view('pdfClientes', compact('clientes'));
		$dompdf=\App::make('dompdf.wrapper');
		$dompdf->loadHTML($vista);
		return $dompdf->stream();
	
	}

	public function pdfRequisito($id){

		$requisitos=Requisito::find($id);
		$vista=view('pdfRequisito', compact('requisitos'));
		$dompdf=\App::make('dompdf.wrapper');
		$dompdf->loadHTML($vista);
		return $dompdf->stream();
	
	}

	public function pdfRequisitos($id){
		$lista=DB::table('usuarios_requisitos')->where('id_usuario', '=', $id)->lists('id_requisito');
		$usuarios=DB::table('requisitos')->whereIn('id',$lista)->orderBy('id','asc')->get();
		$usuarios=Usuario::find($id);
		$requisitos=Requisito::all();
	
		$vista=view('pdfRequisitos', compact('usuarios','requisitos'));
		$dompdf=\App::make('dompdf.wrapper');
		$dompdf->loadHTML($vista);
		return $dompdf->stream();
	}

	public function pdfProyectosRequisitos($id){
		$lista=DB::table('proyectos_requisitos')->where('id_proyecto', '=', $id)->lists('id_requisito');
		$proyectos=DB::table('requisitos')->whereIn('id',$lista)->orderBy('id','asc')->get();
		$proyectos=Proyecto::find($id);
		$requisitos=Requisito::all();
	
		$vista=view('pdfProyectosRequisitos', compact('proyectos','requisitos'));
		$dompdf=\App::make('dompdf.wrapper');
		$dompdf->loadHTML($vista);
		return $dompdf->stream();
	}


	public function asignarRequisitos(){

		$usuarios=Usuario::all();
		return view('asignarRequisitos', compact('usuarios'));
	}
	public function seleccionarRequisitos(Request $request){
		$usuarios=Usuario::all();
		$id=$request->input('usuarios');
		//dd($id);
		$lista=DB::table('usuarios_requisitos')->where('id_usuario', '=', $id)->lists('id_requisito');
		$requisitos=DB::table('requisitos')->whereNotIn('id',$lista)->orderBy('id','asc')->get();
		//dd($usuarios);
		return view('seleccionarRequisitos', compact('usuarios','requisitos','id'));
	}
	public function actualizarUsuariosRequisitos(Request $request, $id){
		//dd($id);

		$requisitos=$request->input('seleccionado');
		foreach ($requisitos as $r) {
			//print($u);
			$registro=new Usuarios_Requisitos();
			$registro->id_requisito=$r;
			$registro->id_usuario=$id;
			$registro->save();
			
		}
		return Redirect('/asignarRequisitos');
	}


	public function asignarProyectosRequisitos(){

		$proyectos=Proyecto::all();
		return view('asignarProyectosRequisitos', compact('proyectos'));
	}
	public function seleccionarProyectosRequisitos(Request $request){
		$proyectos=Proyecto::all();
		$id=$request->input('proyectos');
		//dd($id);
		$lista=DB::table('proyectos_requisitos')->where('id_proyecto', '=', $id)->lists('id_requisito');
		$requisitos=DB::table('requisitos')->whereNotIn('id',$lista)->orderBy('id','asc')->get();
		//dd($usuarios);
		return view('seleccionarProyectosRequisitos', compact('proyectos','requisitos','id'));
		
	}
	public function actualizarProyectosRequisitos(Request $request, $id){
		$requisitos=$request->input('seleccionado');
		foreach ($requisitos as $r) {
			//print($u);
			$registro=new Proyecto_Requisito();
			$registro->id_proyecto=$id;
			$registro->id_requisito=$r;
			$registro->save();
			
		}
		return Redirect('/asignarProyectosRequisitos');
	}

}