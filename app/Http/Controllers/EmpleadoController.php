<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use Illuminate\Support\Facades\Input;

class EmpleadoController extends Controller
{
  public function index ()
  {
  	$empleados =  Empleado::all();

      return view ('empleados.index', ['empleados'=>$empleados]);
  }

  public function get ($id)
  {

  	$empleado = Empleado::find($id);
    
    
      return view ('empleados.empleado', ['empleado'=>$empleado]);
  }


  public function store(Request $request) {
      $empleado = new Empleado;

      $empleado->nombre = Input::get('nombre');
      $empleado->apellido1 = Input::get('apellido1');
      $empleado->apellido2 = Input::get('apellido2');
      $empleado->email = Input::get('email');
      $empleado->telefono = Input::get('telefono');
      $empleado->departamento_id = Input::get('departamento_id');

      $empleado->save();


      return redirect('/');
  }

}

