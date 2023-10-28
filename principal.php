<!DOCTYPE html>
<html lang="es">

<head>
  <title>Dashboard de Administración</title>
  <link rel="shortcut icon" href="../Proyectominimercado/ico/icono.ico" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
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
      z-index: 1;
    }
  </style>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localhost/proyectominimercado/">Dashboard de Administración</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="registro_empleados.php">Registrar Empleados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro_usuarios.php">Registrar Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vista_clientes.php">Ver clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Inventario</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <h2 class="card-header">Información de Ventas</h2>
          <div class="card-body">
            <p>Estadísticas de ventas del mes actual.</p>
            <canvas id="sales-chart" width="100%" height="100px"></canvas>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <h2 class="card-header">Inventario</h2>
          <div class="card-body">
            <p>Información sobre el inventario de productos.</p>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Producto</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Leche</td>
                  <td>100</td>
                  <td>$5.000</td>
                </tr>
                <tr>
                  <td>Pan</td>
                  <td>200</td>
                  <td>$2.000</td>
                </tr>
                <tr>
                  <td>Arroz</td>
                  <td>300</td>
                  <td>$3.000</td>
                </tr>
                <tr>
                  <td>Frutas</td>
                  <td>400</td>
                  <td>$4.000</td>
                </tr>
                <tr>
                  <td>Verduras</td>
                  <td>500</td>
                  <td>$5.000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-white footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>Derechos de autor &copy; 2023 Minimercado</p>
        </div>
        <div class="col-md-6">
          <ul class="list-inline text-end">
            <li class="list-inline-item"><a href="#">Política de Privacidad</a></li>
            <li class="list-inline-item"><a href="#">Términos y Condiciones</a></li>
            <li class="list-inline-item"><a href="#">Contáctenos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Código para crear un gráfico ficticio
    var ctx = document.getElementById('sales-chart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'],
        datasets: [{
          label: 'Ventas',
          data: [120, 150, 110, 140],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
</body>

</html>