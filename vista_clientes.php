<!DOCTYPE html>
<html lang="es">
<head>
  <title>Lista de clientes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <meta charset="UTF-8">
</head>
<body>

  <style>
    body {

        background: url(../Proyectominimercado/img/5-asombrosas-capacidades-que-le-brinda-un-software-WMS.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

.titulo{
 
  text-align: center;
  margin-top: 50px;

}
.th{
color: black;
font-size: bold;

}
.container{

color: beige;


}
</style>



  <div class="container">
    <h1 class="titulo">Lista de clientes</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>País</th>
          <th>Cantidad de pedidos</th>
          <th>Importe total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Juan Pérez</td>
          <td>España</td>
          <td>100</td>
          <td>$10,000</td>
        </tr>
        <tr>
          <td>María González</td>
          <td>México</td>
          <td>50</td>
          <td>$5,000</td>
        </tr>
        <tr>
          <td>José López</td>
          <td>Brasil</td>
          <td>25</td>
          <td>$2,500</td>
        </tr>
      </tbody>
    </table>
    <div class="d-flex justify-content-between">
      <p>Total de clientes: 175</p>
      <p>Importe total: $175,000</p>
    </div>
  </div>
</body>
</html>