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
           {{ $departamento->id }}
        </td>
        
        <td>
          <a href="/departamento/{{ $departamento->id }}">{{ $departamento->nombre }}</a>
          
        </td>
        
        <td>
          {{ $departamento->codigo }}
      </td>
</tr>
    @endforeach

  </table>

@endsection
