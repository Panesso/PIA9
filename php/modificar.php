<?php
session_start();

try {
  
  include "conexion.php";

  $sql="SELECT * FROM usuarios where nickname = :nickname";

  $consulta = $conexion->prepare($sql);

  $consulta -> execute(array(
    ':nickname' => $_SESSION['usuario']
  ));

  $cuenta = $consulta->fetch(PDO::FETCH_OBJ);  
   
if($consulta -> rowCount() > 0)   { 
  $_SESSION['usuario'] = $cuenta -> nickname;
  $nombre = $cuenta -> nombre;
  $apellido = $cuenta -> apellido;
  $nickname = $cuenta -> nickname;
  $correo_electronico = $cuenta -> correo_electronico;
  $password = $cuenta -> password;
 }
}
catch(Exception $e){
  echo 'Error conectando a la base de datos: '. $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/cssperfil.css">
<head>
  <title>Editar información - EDOLUCIÓN</title>
</head>
<body>
  <form class="estpf" method="post" action="guardar.php">
    <input type="text" name="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre"/>
    <input type="text" name="apellido" value="<?php echo $apellido; ?>" placeholder="Apellido"/>
    <input type="text" name="nickname" value="<?php echo $nickname; ?>" placeholder="Nickname"/>
    <input type="text" name="correo_electronico" value="<?php echo $correo_electronico; ?>" placeholder="Correo Electrónico"/>
    <input type="text" name="password" value="<?php echo $password; ?>" placeholder="Contraseña"/>
  <button>GUARDAR CAMBIOS</button>
  <a href="perfil.php" class="back"><p>VOLVER ATRÁS</p></a>
  </form>

</body>
</html>