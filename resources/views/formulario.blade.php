@extends('layouts.web')
@section('titulo','superofertas')
@section('contenido')


<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

		<title>SUPEROFERTAS</title>
	
    
	<body class="landing is-preload">
	<div id="page-wrapper">
        <form action="ooperaciones" method="POST">
          @csrf  
           
            <div>
              <div class="container">
                <div class="card card-register mx-auto mt-5">
                    <br>
                  <h2>REGISTRO UWUUU</h2>
                  <br>
                  <br>
                  <div class="card-body">
                    <form class="">
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-md-6">
                        
                          
                            <label for="exampleInputName">Nombres</label>
                            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Escribe tu nombre">
                          </div>
                          <div class="col-md-6">
                            <label for="exampleInputLastName">Apellidos</label>
                            <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Escribe tu apellido">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Correo Electronico</label>
                        <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="&#128231;Escribe tu email">
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-md-6">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="&#128272;Contraseña">
                          </div>
                          <div class="col-md-6">
                            <label for="exampleConfirmPassword">Confirmar Contraseña</label>
                            <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="&#128272; Confirmar contraseña">
                          </div>
                        </div>
                      </div>
                     
                    
                    <div class="text-center">
                      <a class="button" type="submit" href="">ENVIAR</a>
                      
                    </div>
                    </form>
                  </div>
                </div>
                <br>
                
                <a class="button primary" button onclick="history.back()" id="contact">ATRAS</button></a>
           
                <br>
                <br>
              </div>
            
            </body>
            </html>