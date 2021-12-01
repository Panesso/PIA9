<?php
session_start();

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/cssprimaria.css">
<head>
	<title>PRIMARIA - Edolución</title>
</head>
<body>
<div class="encab">
<img src="../img/logoleted.png" class="logohead">
	</div>
	<ul class="menu">
		<li><a href="../php/home.php">INICIO </a></li>
		<li class="barra"> | </li>
		<li><a href="../php/PRIMARIA.php">PRIMARIA </a></li>
		<li class="barra"> | </li>
		<li><a href="../php/SECUNDARIA.php">SECUNDARIA </a></li>
		<li class="barra"> | </li>
		<li><a href="../php/DOCENTES.php">DOCENTES </a></li>
		<li class="barra"> | </li>
		<li><a href="../php/perfil.php">PERFIL</a></li>	
	</ul>
 	<div class="secc">
 		<p>PRIMARIA</p>
 	</div>
	<div class="userinfo">
		<img src="../img/userph.png" height="100">
		<p><?php echo $_SESSION['usuario']; ?></p>
	</div>


	<div class="cuerpoizqa">
		<h2>ACTIVIDADES</h2>
			<p>- <a href="../php/primaria/PR-Lenguaje.php"> Lenguaje. </a> </p>
			<p>- <a href="../php/primaria/PR-Sociales.php"> Sociales y Ciudadanas. </a> </p>
			<p>- <a href="../php/primaria/PR-Artes.php"> Artes. </a> </p>
			<p>- <a href="../php/primaria/PR-Naturales.php"> Ciencias Naturales. </a> </p>
			<p>- <a href="../php/primaria/PR-Matematicas.php"> Matemáticas. </a> </p>
	</div>

	<div class="cuerpoizqb">
		
	</div>

	<div class="cuerpoder">
		<h1> ¡HOLA! </h1>
			<h2> Bienvenido al área de PRIMARIA. </h2>
			<p class="selectact2"> En esta categoría podrás encontrar las principales asignaturas para mejorar tu proceso de aprendizaje de acuerdo a tus expectativas y nivel que encuentres necesario.</p>
		</div>

	</div>


</body>
<div class="separadorinf"></div>
<div class=closec>
	<p><a href="../index.html"> SALIR </a></p>
</div>
<footer>
	<h3>Todos los derechos reservados — Edolución 2021.</h2>
</footer>
</html>