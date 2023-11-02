<?php
// Conexión a la base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "datos_registro_usuarios_juan"; 
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}

?>