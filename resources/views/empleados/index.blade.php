@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

  <table>
  	
  	@foreach ($empleados as $empleado)

    <tr>
      <th>Id</th>
    
      <th>Nombre/Apellido</th>

      <th>Departamento</th>

      <th>Responsable del proyecto</th>
   
    </tr>

    <tr>
      <td>{{ $empleado->id }}</td>
      <td>{{ $empleado->nombre }}  {{ $empleado->apellido1 }}  {{ $empleado->apellido2 }}</td>
      <td> <a href="/departamento/{{ $empleado->departamento_id }}">{{ $empleado->departamento_id }}</a></td>
      @if(isset($empleado->proyecto))
      <td><a href="/proyecto/{{ $empleado->proyecto->id }}">{{ $empleado->proyecto->nombre }}</a></td>
      @endif
    </tr>
    @endforeach
  </table>

@endsection
