<html>
<header>
<body>	

<label>Agregar Alumno</label>
{{ Form::open(array('url' => 'Administrador/alumno', 'method' => 'post'))}}

<p>Nombre: </p>
{{Form::text('Nombre')}}
<p>Apellido: </p>
{{Form::text('Apellido')}}
<p>Rut: </p>
{{Form::text('Rut_Alum')}}
<p>Password: </p>
{{Form::text('Clave')}}


{{Form::submit('Enviar')}}

{{ Form::close()}}

</body>
</header>
</html>