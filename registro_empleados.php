<!DOCTYPE html>
<html>

<head>
  <title>Registro de Empleados</title>
  <link rel="stylesheet" href="statics/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
      margin-top: 50px;

    }

    .container {
      padding: 60px;
      opacity: 90%;


    }

    input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      left: 10px;
      margin-left: 10px;
    }
    input[type="submit"]: {
      background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            left: 10px;
            margin-left: 10px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        input[type="reset"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            left: 10px;
            margin-left: 10px;
        }


        input[type="reset"]:hover {
            background-color: #0056b3;
        }


        input[type="button"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            left: 10px;
            margin-left: 10px;
        }
        input[type="button"]:hover {
            background-color: #0056b3;
        }
  </style>







  <div class="container">
    <h2>Registro de Empleados</h2>
    <form id="registration-form">
      <!-- Campos del formulario -->
      <!-- ... -->
      <!-- Campo de "Nombre de usuario" -->
      <div class="form-group">
        <label for="username">Nombre de usuario</label>
        <input type="text" id="username" name="username" required>
      </div>
      <!-- Campo de "nombre del empleado" -->
      <div class="form-group">
        <label for="nombres">Nombre del empleado</label>
        <input type="text" id="nombres" name="username" required>
      </div>
      <!-- Campo de "Apellidos del empleado" -->
      <div class="form-group">
        <label for="apellidos">Apellidos del empleado</label>
        <input type="text" id="apellidos" name="username" required>
      </div>
      <!-- Campo de "Correo electrónico" -->
      <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <!-- Campo de "Contraseña" -->
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <!-- Campo de "Confirmar contraseña" -->
      <div class="form-group">
        <label for="confirm-password">Confirmar contraseña:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
      </div>
      <!-- Campo de "Fecha de nacimiento" -->
      <div class="form-group">
        <label for="birthdate">Fecha de nacimiento:</label>
        <input type="date" id="birthdate" name="birthdate" required>
      </div>
      <!-- Campo de "Género" -->
      <div class="form-group">
        <label class="gender-label">Género:</label>
        <label>
          <input type="radio" name="gender" value="male" required>
          <span>Masculino</span>
        </label>
        <label>
          <input type="radio" name="gender" value="female" required>
          <span>Femenino</span>
        </label>
        <div class="form-group">
          <label for="rol">Rol:</label>
          <select id="rol" required>
            <option value="">Seleccionar Rol</option>
            <option value="cajero">Cajero</option>
            <option value="jefe_bodega">Jefe de Bodega</option>
            <option value="administrador">Administrador</option>
          </select>
        </div>
      </div>
      <!-- Botón de "Registrarse" -->
      <input type="reset" value="Registrarse">
      <input type="reset" value="Limpiar formulario">
      <input type="button" onclick="history.back()" name="atrás" value="Atrás">    </form>
    </form>

    <!-- Botón de "Registrarse" -->

  </div>

  <!-- Biblioteca SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

  <script>
    var form = document.getElementById("registration-form");
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      validateForm();
    });

    function validateForm() {
      // Validación de los campos del formulario
      var username = document.getElementById("username");
      const nombres = document.getElementById("nombres");
      const apellidos = document.getElementById("apellidos");
      const email = document.getElementById("email");
      const password = document.getElementById("password");
      const confirmPassword = document.getElementById("confirm-password");
      const birthdate = document.getElementById("birthdate");
      const gender = form.querySelector("input[name='gender']:checked");
      const rolSelect = document.getElementById('rol');

      resetValidation();

      // Validación de cada campo del formulario
      if (!username.value) {
        markAsInvalid(username);
      }

      if (!nombres.value) {
        markAsInvalid(nombres);
      }

      if (!apellidos.value) {
        markAsInvalid(apellidos);
      }

      if (!email.value || !isValidEmail(email.value)) {
        markAsInvalid(email);
      }

      if (!password.value) {
        markAsInvalid(password);
      }

      if (password.value !== confirmPassword.value) {
        markAsInvalid(confirmPassword);
      }

      if (!birthdate.value) {
        markAsInvalid(birthdate);
      }

      if (!gender) {
        markAsInvalid(form.querySelector(".gender-label"));
      }
      if (!rolSelect.value) {
        markAsInvalid(rolSelect);
      }

      // Si todos los campos son válidos, muestra un mensaje de éxito y resetea el formulario
      if (form.querySelectorAll(".error").length === 0) {
        // Mostrar SweetAlert2 con mensaje de éxito
        Swal.fire({
          icon: 'success',
          title: 'Registro exitoso',
          text: 'El formulario ha sido registrado exitosamente.'
        }).then(function () {
          window.location.href = "index.html";
        });
      } else {
        // Mostrar SweetAlert2 con mensaje de error
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Las contraseñas no coinciden.'
        });
      }
    }

    // Funciones de validación y otras funciones
    function resetValidation() {
      // Reinicia la validación eliminando las clases de error y validación de los campos
      var inputs = form.querySelectorAll("input");
      inputs.forEach(function (input) {
        input.classList.remove("error", "valid");
      });

      var genderLabel = form.querySelector(".gender-label");
      genderLabel.classList.remove("error");
    }

    function markAsInvalid(input) {
      // Marca un campo como inválido agregando la clase "error"
      input.classList.add("error");
    }

    function markAsValid(input) {
      // Marca un campo como válido agregando la clase "valid"
      input.classList.remove("error");
      input.classList.add("valid");
    }

    function isValidEmail(email) {
      // Verifica si un correo electrónico es válido utilizando una expresión regular
      var emailRegex = /\S+@\S+\.\S+/;
      return emailRegex.test(email);
    }



  </script>
</body>

</html>