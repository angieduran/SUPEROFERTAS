@extends('layouts.web')
@section('titulo','vista de registros')
@section('contenido')

<h2>CONTROL DE PERSONAS REGISTRADAS A SUPEROFERTAS</h2>
<br>
<div class="container">
<div class="row">
@foreach ($personas as $persona)
<div class="col-6">
<div class="card" style="width: 25rem;">
        <div class="card-body">
            
            <h5 class="card-tittle">USUARIOS</h5>
            <p class="card-text">Nombre: {{$persona->nombre}}</p>
            <p class="card-text">Apellidos: {{$persona->apellidos}}</p>
            <p class="card-text">Correo Electronico: {{$persona->correo}}</p>
            <p class="card-text">Contraseña: {{$persona->contraseña}}</p>
        <a href="{{url('/ooperaciones/'.$persona->id.'/edit')}}">Modificar</a>
        <form method="POST" action="{{url('/ooperaciones/'.$persona->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="button primary" onclick="return confirm('esta seguro?')">ELIMINAR </button>
        
        </form>

           
            
        </div>
    </div>
    <br>
</div>
    
@endforeach
</div>
</div>




@endsection