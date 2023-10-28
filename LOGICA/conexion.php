<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>
</head>

<body>
    <h1>Pongase en contacto con su administrador</h1>

    <?php
    $host = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "usuarios";

    $conexion = mysqli_connect($host, $usuario, $clave, $bd);
    if ($conexion) {
        //echo "conectado correctamente";
    } else {
        echo "No se pudo conectar su usuario o contraseña son invalidos";

    }

    //echo " CONSULTA SQL CON ARREGLOS"."<br>"; 
    // echo "<br>";
    // if($resultado = $conexion->query("select IdLogin, usuario, clave from login")) {
    
    // while($registro = $resultado->fetch_assoc() ){
    
    // echo $registro["usuario"] . " " . $registro["clave"] . "\n" . "<br>";
    // } 
    //  }
    //$resultado->free();
    //$conexion->close();
    
    ?>
</body>

</html>