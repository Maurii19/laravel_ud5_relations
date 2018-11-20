@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleado: {{ $empleado->nombre }}  {{ $empleado->apellido1 }}  {{ $empleado->apellido2 }}</h2>
  <h3>Responsable del proyecto:</h3> 
  @if(isset($empleado->proyecto))
  <p>Nombre del proyecto: {{ $empleado->proyecto->nombre }}</p>
  @endif
  <h3>Colabora en los siguientes proyectos: </h3>
  @if(isset($empleado->proyectos))
  @foreach($empleado->proyectos as $proyecto)
  
  <p>Proyecto: <a href="/proyecto/{{ $proyecto->id }}">{{ $proyecto->nombre  }}</a></p> 
  <p>Fecha inicio: {{ date('d-m-Y', strtotime($proyecto->pivot->fechainicio)) }}</p>
  <p>Fecha fin: {{ date('d-m-Y', strtotime($proyecto->pivot->fechafin)) }}</p>
  @endforeach

  @endif
@endsection
