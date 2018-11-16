@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleado: {{ $empleado->nombre }}  {{ $empleado->apellido1 }}  {{ $empleado->apellido2 }}</h2>
  <h3>Responsable del proyecto:</h3> 
  @if(isset($empleado->proyecto))
  {{ $empleado->proyecto->nombre }}
  @endif
  <h3>Colabora en los siguientes proyectos: </h3>
  @if(isset($empleado->proyectos))
  @foreach($empleado->proyectos as $proyecto)
  
  {{ $proyecto->nombre  }}
  @endforeach
  @endif
@endsection
