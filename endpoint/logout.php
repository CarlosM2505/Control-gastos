<?php
session_start(); // Iniciar sesión
session_unset(); // Eliminar todas las variables de sesión
session_destroy(); // Destruir la sesión

// Redirigir a login
echo "<script>
        window.location.href = 'http://localhost/control-gastos/';
        </script>";
exit();
