@extends('layouts.app')

@section('content')
<style>
    .container{

        display: flex;
  justify-content: center;
  align-items: center;

    }
    #a{
      align-self: center;
    }
    </style>


 <div class="container"> 

<div class="card" style="width:400px">
    <img class="card-img-top" src="images/logo3.png" alt="Card image">
        <div class="card-body">
            <h2>TU PERFIL</h2>
            
            <h3>Nombre Completo:</h3><p> {{ Auth::user()->name}}</p>
            <h3>Correo Electronico:</h3><p> {{ Auth::user()->email }}</p>
            <h3>Contraseña: </h3><p>{{ Auth::user()->password }}</p>
            <a href="/" class="button primary" > Editar</a>
        </div>
</div>
</div>







@endsection