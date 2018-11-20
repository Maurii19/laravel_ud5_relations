@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')
	
	<h2>Datos del empleado</h2>

	<form action="{{ URL::to('/postFormEmpleado') }}"  method="POST">
		@csrf
		<label>Nombre:</label>
		<input type="text" name="nombre" placeholder="Nombre"><br>
		<label>Apellido 1:</label>
		<input type="text" name="apellido1" placeholder="Apellido 1"><br>
		<label>Apellido 2:</label>
		<input type="text" name="apellido2" placeholder="Apellido 2"><br>
		<label>Email:</label>
		<input type="text" name="email" placeholder="Email"><br>
		<label>Telefono:</label>
		<input type="text" name="telefono" placeholder="Telefono"><br>
		<br><label>ID del departamento:</label>
		<select name="departamento_id">
			@foreach ($departamentos as $departamento)
			<option value="{{ $departamento->id }}">{{ $departamento->id }}</option>
			@endforeach
		</select>
		<br>
		<input type="submit" value="Submit">
	</form>

@endsection