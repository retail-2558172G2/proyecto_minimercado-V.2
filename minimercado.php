<!DOCTYPE html>
<html>
<head>
  <title>Mini Tienda de Mercado</title>
  <link rel="stylesheet" href="statics/minimercado.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../Proyectominimercado/ico/icono3.ico" />


  <meta charset="UTF-8">
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

</style>




  <header>
    <h1>Mini Tienda de Mercado</h1>
  </header>

  <div class="container">
    <section class="productos">
      <h2>Productos</h2>
      <ul id="productos-lista">
        <!-- Los productos se generarán dinámicamente con JavaScript -->
      </ul>
    </section>

    <section class="carrito">
      <h2>Carrito de Compras</h2>
      <ul id="carrito-lista">
        <!-- Los productos seleccionados se generarán dinámicamente con JavaScript -->
      </ul>
      <button id="vaciar-carrito">Vaciar Carrito</button>
    </section>
  </div>

  <script src="statics/minimercado.js"></script>
</body>
</html>
