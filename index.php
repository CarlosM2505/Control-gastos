<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
  <!-- bootswach -->
  <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">

  <style>
    body {
      background-image: url('assets/img/control-gastos-bg.jpg');
      background-size: cover;
      background-position: 0% 0%;
      background-repeat: no-repeat;
      height: 100vh;
      width: 100vw;
      animation: horizontalMove 50s infinite;
      animation-timing-function: ease;
      position: relative;
    }


    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .form-container {
      position: relative;
      z-index: 2;
    }

    #alert-container {
      z-index: 1001;
    }


    @keyframes horizontalMove {
      0% {
        background-position: 0% 0%;
      }

      50% {
        background-position: 100% 20%;
      }

      100% {
        background-position: 0% 0%;
      }
    }
  </style>
</head>

<body>
  <div class="overlay"></div>
  <div class="container vh-100 d-flex flex-column justify-content-center align-items-center form-container">
    <div class="bg-dark bg-opacity-50 p-4 rounded" style="max-width: 500px;">
      <h1 class="fw-bold text-light">¡Bienvenido!</h1>
      <form class="d-flex flex-column gap-2" action="endpoint/login.php" method="post">
        <label for="usuario" class="form-label text-light">Nombre de usuario</label>
        <input class="form-control" type="text" id="usuario" name="usuario" placeholder="Nombre de usuario" required>
        <label for="clave" class="form-label text-light">Contraseña</label>
        <input class="form-control" type="password" id="clave" name="clave" placeholder="Contraseña" required>
        <input class="btn btn-success" type="submit" value="Ingresar">
      </form>
    </div>
  </div>

  <!-- Alerta de Bootstrap -->
  <div id="alert-container" class="position-absolute bottom-0 end-0"></div>


  <script src="assets/notifications.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>