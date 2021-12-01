<?php
session_start();

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../../css/cssprimaria.css">
<head>
	<title>PRIMARIA - Edolución</title>
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
 		<p>PRIMARIA</p>
 	</div>
	<div class="userinfo">
		<img src="../../img/userph.png" height="100">
		<p><?php echo $_SESSION['usuario']; ?></p>
	</div>

	<div class="derbody-inicio">
			<div class="cuerpodertext">
			<h2> Estás en el área de... </h2>
			<h1 class="tlarea-lenguaje"> LENGUAJE </h1></div>
			
<p>En este punto podemos entender las <b style="color:green";>normas básicas de acentuación</b>. Básicamente son tres: llanas, agudas y esdrùjulas. Son palabras agudas todas aquellas cuya sílaba tónica se encuentre al final. Llevarán tilde todas aquellas que acaben en ‘n’ ‘s’ o vocal.</p> <p class="ejemploslcapr"><b>Ejemplo:</b> <i>"dragón", "colibrí", "jugar".</i></p>

<p>• Son palabras llanas todas aquellas cuya sílaba tónica se encuentre en la penúltima posición. Llevarán tilde todas aquellas que no acaben en ‘n’ ni en ‘s’ ni en vocal.</p> <p class="ejemploslcapr"><b>Ejemplo:</b> "árbol", "lápiz" , "mesa".</p>

<p>• Son palabras esdrújulas todas aquellas cuya sílaba tónica se encuentre en la antepenúltima posición. Todas las palabras esdrújulas llevan tilde. Ejemplo: "número", "océano".Las palabras sobreesdrújulas también llevan siempre tilde.</p>	

<p>Abajo al lado izquierdo puedes encontrar un juego para poner en práctica esta teoría.</p>
<p><a href="PR-Lenguaje-juego.php">INICIAR JUEGO</a></p>
	</div>
</body>


<div class=closec>
	<p><a href="../../index.html"> SALIR </a></p>
</div>
<footer>
	<h3>Todos los derechos reservados — Edolución 2021.</h2>
</footer>
</html>