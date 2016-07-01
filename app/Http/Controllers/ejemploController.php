<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Usuario;

use App\Proyecto;
use DB;

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
		return view('seleccionarUsuarios', compact('proyectos','usuarios'));
		
	}
}
