@extends('layouts.web')
@section('titulo','superofertas')
@section('contenido')
<br>
<div class="box">
<form action="ooperaciones" method="POST">
		{{csrf_field()}}
	
		<h1>REGISTRAR USUARIO</h1>  
	      <p>Nombre:</p>
		    <input  type="text" placeholder="nombre" name="txtnombre">
	         <BR>
	         <br>
	      <p>Apellidos</p>
	        <input type="text" placeholder="apellido" name="txtapellido">
	         <BR>
	         <br>
	      <p>Correo Electronico</p>
	        <input type="email" placeholder="ejemplo1@gmail.com" name="txtcorreo">
	         <br>
	         <BR>
	      <p>Contraseña:</p>
	 		<input type="password" placeholder="contraseña" name="txtcontraseña">
	 		 <br>
	 		 <BR>
			 <br>
	 	<button type="submit" class="button primary">REGISTRAR</button>
	 		<br>
	 		<br>
	 	<a class="button primary" button onclick="history.back()" id="contact">ATRAS</button></a>
	 
	 
    
	
</form>
</div>


@endsection

