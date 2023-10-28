<!DOCTYPE html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<html>

<head>
    <meta charset="UTF-8">
    <title>Logueo de sesion</title>
</head>

<body background="https://www.adslzone.net/app/uploads-adslzone.net/2017/01/acceso-carpeta-windows.jpg"
    leftmargin="10px" text=" #FDFEFE" topmargin="50px">

    <style>
        body {
            text-align: center;
            background-size: cover;

        }
    </style>

</body>




<?php
require 'conexion.php';
session_start();

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
//echo $usuario;
//echo $clave;

$q = "SELECT COUNT(*) as contar from login where  usuario= '$usuario' and clave='$clave' ";
$consulta = mysqli_query($conexion, $q);
$array1 = mysqli_fetch_array($consulta);

switch ($usuario) {
    case 'Marcela':
        if ($array1['contar'] > 0) {
            $_SESSION['username'] = $usuario;
            header("location: ../principal.php ");

        } else {
            echo "Datos incorrectos, su usuario o contraseña son invalidos.";
        }
        break;

    case 'Mauricio':
        if ($array1['contar'] > 0) {
            $_SESSION['username'] = $usuario;
            header("location: ../principal.php ");

        } else {
            echo "Datos incorrectos, su usuario o contraseña son invalidos.";
        }
        break;

    default:
        echo "Datos incorrectos, su usuario o contraseña son invalidos.";

        echo "<a href= 'LOGICA/salir.php' SALIR </a>";

}




?>



</body>

</html>