<?php
session_start();
include('conexion.php');

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

 // Consultar la base de datos para verificar las credenciales
 $sql = "SELECT id, nombre FROM registro_usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
 $result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Inicio de sesión exitoso, redirige al usuario a una página de inicio
    $row = $result->fetch_assoc();
    $_SESSION['usuario_id'] = $row['id'];
    $_SESSION['nombre_usuario'] = $row['nombre'];
    header("Location:index_carrusel.php");
} else {
    // Muestra un mensaje de error si las credenciales son incorrectas
    echo "<script> alert('Usuario o Contraseña Son Incorrectas');window.location= 'ingreso.php' </script>";
}
}
$conn->close();
?>