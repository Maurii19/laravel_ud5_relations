@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

  <table>
  		@foreach ($proyectos as $proyecto) 
    <tr>
      <th>Id</th>

      <th>Nombre</th>

      <th>Titulo</th>
  
      <th>Responsable</th>
       
    </tr>

    <tr>
      <td>{{ $proyecto->id }}</td>
      <td><a href="/proyecto/{{ $proyecto->id }}">{{ $proyecto->nombre }}</a></td>
      <td>{{ $proyecto->titulo }}</td>
      <td><a href="/empleado/{{ $proyecto->empleado->id }}">{{ $proyecto->empleado->nombre }}</a></td>
    
    </tr>

    @endforeach
  </table>

@endsection
