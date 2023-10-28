<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login con sesiones</title>
</head>

<body>
    <style>
        body {

            background: url(../Proyectominimercado/img/Fotolia_109735043_S.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .button {
            display: inline-block;
            padding: 30px 50px;
            margin: 10px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10%;
            margin-left: 100px;

        }

        .list-group {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            left: 10px;
        }
    </style>

</body>

<body>






    <type class="button"> <a href="registro_empleados.php">Registrar Usuario</a></type>
    <type class="button"> <a href="resgistro_usuarios.php">Registrar Producto</a></type>
    <type class="button"> <a href="vista_clientes.php">Consultar Factura</a></type>
    









    <?php
    session_start();

    $usuario = $_SESSION['username'];

    if (!isset($usuario)) {
        header("location: login.php");
    } else {

        echo " <h1> Bienvenid@ Usuari@  $usuario </h1> ";
        echo "<a href= 'LOGICA/salir.php'> SALIR </a>";
    }
    ?>
</body>

</html>