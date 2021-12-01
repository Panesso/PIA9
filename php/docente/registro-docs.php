<?php
//recibe los datos del formulario
$nombre = $_POST['nombre'];
$documento_identidad = $_POST['documento_identidad'];
$materia = $_POST['materia'];
$institucion = $_POST['institucion'];

try {
	//Creamos la conexión PDO por medio de una instancia de su clase
	include "../conexion.php";

	//generar la consulta sql
	$sql="INSERT INTO docentes (id_docente, nombre, documento_identidad, materia, institucion) VALUES (NULL, :nombre, :documento_identidad, :materia, :institucion)";

	//prepara al sistema para hacer una consulta
	$consulta = $conexion->prepare($sql);

	//ejecutar la consulta
	$consulta -> execute(array(
		':nombre' -> $nombre,
		':documento_identidad' -> $documento_identidad,
		':materia' -> $materia,
		':institucion' -> $institucion
		));

   
	header("location:../DOCENTES.php");
      

}
catch(Exception $e){
	echo 'Error conectando a la base de datos: '. $e->getMessage();
}
?>