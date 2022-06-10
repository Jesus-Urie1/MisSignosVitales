<?php

$usuario_correcto = "jvelazquez18@ucol.mx";
$contraseña_correcta = "admin";

$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
$error = '';
if ($usuario === $usuario_correcto && $contraseña === $contraseña_correcta) {
    session_start();

    $_SESSION["usuario"] = $usuario;

    header("Location: index.php");
} else {
    $error .= "<script>
    Swal.fire(
        'Error!',
        'La contraseña o el email son incorrectos!',
        'error'
        )
    </script>";
}
require 'login.php';