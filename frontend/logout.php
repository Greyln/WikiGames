<?php
// Iniciar la sesión
session_start();

// Cerrar la sesión
session_destroy();

// Redirigir a la página de inicio de sesión
header('Location: /frontend/index.html');
exit();
?>
