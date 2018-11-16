@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>


  <table>
 
    <tr>
    <th>Id</th>
     
    <th>Codigo</th>
    
    <th>Nombre</th>
       
        </tr>
        <tr>
      @foreach ($departamentos as $departamento)

        <td>
          <a href="/departamento/{{ $departamento->id }}"> {{ $departamento->id }}</a>
        </td>
        
        <td>
          {{ $departamento->nombre }}
          
        </td>
        
        <td>
          {{ $departamento->codigo }}
      </td>
</tr>
    @endforeach

  </table>

@endsection
