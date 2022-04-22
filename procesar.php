<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de registro</title>
</head>
<body>
<header>
	<h1>Validacion de edad</h1>
</header>
<nav>
	<a href="index.php">Inicio</a>
	<a href="info.html">Quines somos</a>
	<a href="formulario.html">Validar</a>
	<a href="contactos.html">Contactos</a>
</nav>
<section><br><br><br>
<?php 
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];

if (($edad>=18) && ($edad<50)) {
	echo $nombre." Ud es un adulto";
}elseif($edad>51){
	echo  $nombre."Ud es persona de tercera edad";
}else{
	echo  $nombre."Ud es menor de edad";
}
?>
</section><br><br><br>
<footer>Derechos reservados UTPL 2022</footer>
</body>
</html>