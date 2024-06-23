<?php
include('../conn/conn.php');

session_start(); // Iniciar sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Capturar los datos del formulario
  $usuario = $_POST["usuario"];
  $clave = $_POST["clave"];

  // Preparar la consulta SQL con sentencias preparadas
  $sql = "SELECT * FROM tbl_user WHERE usuario = :usuario";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  // Verificar si el usuario existe y si la contraseña es correcta
  if ($user && $clave == $user['clave']) {

    // Guardar información del usuario en la sesión
    $_SESSION['usuario'] = $usuario;

    // Inicio de sesión exitoso
    echo "<script>
        window.location.href = 'http://localhost/control-gastos/home.php?loginStatus=success';
        </script>";
    exit();
  } else {
    // Credenciales incorrectas
    echo "<script>
            window.location.href = 'http://localhost/control-gastos/?loginStatus=fail';
            </script>";
  }

  $conn = null;
}
