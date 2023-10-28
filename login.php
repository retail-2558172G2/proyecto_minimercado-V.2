<!DOCTYPE html>
<html>

<head>
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="statics/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../Proyectominimercado/ico/icono2.ico" />


  <meta charset="UTF-8">
</head>

<body>

  <style>
    body {
      background: url(../Proyectominimercado/img/Fotolia_109735043_S.jpg);
      background-size: cover;
      background-attachment: fixed;
    }

    .form-element {
      display: flex;
      opacity: 100%;
    }

    .imagen {
      width: 200px;
      margin-top: 10px;
      margin-left: 23%;
      display: flex;
    }
  </style>


  
<img class="imagen" src="https://media.giphy.com/media/UGEEeGSBUSgnQ9bdXc/giphy.gif" />


<form method=post name="Ingresar" action="LOGICA/loguear.php">

    <div class="form-element">

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-info">Iniciar Sesion</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="username">usuario</label>
                                    <input type="text" class="form-control" name="usuario"
                                        placeholder="Nombre de usuario" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" name="clave"
                                        placeholder="Contraseña" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-info  " enabled>Iniciar
                                    sesión</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>


<?php


?>
</body>

</html>