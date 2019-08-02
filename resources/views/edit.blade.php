@extends('layouts.app')
@section('titulo','superofertas')
@section('contenido')


    <form action="{{url('/ooperaciones/'.$persona->id)}}" method="POST">
       
            @csrf
           @method('PUT')
               <h1>REGISTRAR USUARIO</h1>  
                 <p>Nombre:</p>
                 <input  type="text"  name="txtnombre" value="{{$persona->nombre}}">
                    <BR>
                    <br>
                 <p>Apellidos</p>
                   <input type="text"  name="txtapellidos" value="{{$persona->apellidos}}">
                    <BR>
                    <br>
                 <p>Correo Electronico</p>
                   <input type="email" name="txtcorreo" value="{{$persona->correo}}">
                    <br>
                    <BR>
                 <p>Contraseña:</p>
                    <input type="password" name="txtcontraseña" value="{{$persona->contraseña}}">
                     <br>
                     <BR>
                    <br>
                <input type="submit" value="MODIFICAR">
                    <br>
                    <br>
                <a class="button primary" button onclick="history.back()" id="contact">ATRAS</button></a>
            
            
           
           
               
     </form>
    

@endsection
