<?php
session_start();

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../../css/css-secundaria.css">
<head>
	<title>SOCIALES - Secundaria - Edolución</title>
</head>
<body>
<div class="encab">
<img src="../../img/logoleted.png" class="logohead">
	</div>
	<ul class="menu">
		<li><a href="../../php/home.php">INICIO </a></li>
		<li class="barra"> | </li>
		<li><a href="../../php/PRIMARIA.php">PRIMARIA </a></li>
		<li class="barra"> | </li>
		<li><a href="../../php/SECUNDARIA.php">SECUNDARIA </a></li>
		<li class="barra"> | </li>
		<li><a href="../../php/DOCENTES.php">DOCENTES </a></li>
		<li class="barra"> | </li>
		<li><a href="../../php/perfil.php">PERFIL</a></li>	
	</ul>
 	<div class="secc">
 		<p>SECUNDARIA</p>
 	</div>
 	<div class="userinfo">
		<img src="../../img/userph.png" height="100">
		<p><?php echo $_SESSION['usuario']; ?></p>
	</div>

	<div class="body-SCSociales">
		<div class="tlarea-sociales">
			<h1> Estás en el área de...</h1>
			<h2> SOCIALES Y CIUDADANAS </h2>
			<p class="selectact2"> En este área encontramos actividades para optimizar nuestras competencias ciudadanas que nos permitan desarrrollarnos como seres integros.</p>
		</div>
		<iframe src="https://scratch.mit.edu/projects/3167171/embed" allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen></iframe>
	</div>

</body>

<div class=closec>
	<p><a href="../../../index.html"> SALIR </a></p>
</div>
<footer>
	<h3>Todos los derechos reservados — Edolución 2021.</h2>
</footer>
</html>