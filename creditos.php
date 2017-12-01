<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Cr&eacute;ditos</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>
  <body onload = "loadMap()">
  <div id='page-wrap'>
	<header class='main' id='h1'>
		<span class="right"><a href="registrar.php" >Registrarse</a></span>
      		<span class="right"><a href="login.php" >Login</a></span>
      		<span class="right"><a href="recuperar.php" >Recuperar Contraseña</a></span>
          <span class="logueadoDatos" id="logueadoImagen"></span></br></br>
          <span class="logueadoDatos"><label id = "usuarioMostrar"/></span>
      		<span class="right" style="display:none;" id ="logout" ><a href="logout.php">Logout</a></span>
          
          
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<span><a href='layout.php' id="layout">Inicio</a></span>
    <span><a href='revisarPreguntas.php' id="revisar" style="display:none">Revisar preguntas</a></span>
		<span><a href='quiz.php' id="quiz">Juega</a></span>
		<span><a href='creditos.php' id="creditos" >Creditos</a></span>
    <span><a href='gestionPreguntas.php' id="gestionar" style="display:none">Gestionar Preguntas</a></span>
    
	</nav>
    <section class="main" id="s1">
    
	<div id='creditos'>
		<p id="creditosIniciales"> Amaia Alfageme y Jokin Ortega </br> Ingenier&iacute;a del Software </br> </p>
		<img src = "https://st-listas.20minutos.es/images/2016-03/408843/list_640px.jpg?1457897928" height = "15%" width = "15%">
		</br>
	
	</div>
  <h2>Localizacion</h2>
  <div id = "map" style = "width:640px; height:480px;"></div>
    </section>
	<footer class='main' id='f1'>
		<p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
		<a href='https://github.com'>Link GITHUB</a>
	</footer>
</div>
  
    
      
</body>
</html>
<script type="text/javascript" src='https://code.jquery.com/jquery-3.2.1.js'></script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXNDbrS6Zz0JdDyJ0Hzt9bvj9iyQ8zqv8&callback=loadMap">
</script>
<script>
  
  function logueado(nombre,imagen,rol){
    $('.right').hide();
    $('#layout').hide();
    $('#logout').show();
    $('#usuarioMostrar').text("Bienvenido/a " + nombre);
    $('#logueadoImagen').html('<img src="imagenes/'+imagen+'" style="height:60px;width:auto" />');
    if (rol == 'profesor'){
      $('#revisar').show();
      $('#gestionar').hide();
    }
    else if (rol == 'alumno'){
      $('#revisar').hide();
      $('#gestionar').show();
    }
  }
  
        function loadMap() {
          $.getJSON('http://ip-api.com/json', function(data) {
                var latitud = data.lat;
                var longitud = data.lon;
                var latlng = new google.maps.LatLng(latitud, longitud);
          var myOptions = {
            zoom: 11,
            center: latlng,
          };
          const map = new google.maps.Map(document.getElementById("map"), myOptions);
          });
          


        }
      </script>

<?php

session_start();
if (isset($_SESSION['email'])){
    echo " <script> logueado('".$_SESSION['nombre']."','".$_SESSION['imagen']."','".$_SESSION['rol']."'); </script>";
  }

?>






 










