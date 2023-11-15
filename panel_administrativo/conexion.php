<?php
// Conexión a la base de datos
$servername = "127.0.0.1:3306";
$username = "u684809565_admin";
$password = "Admin_123";
$dbname = "u684809565_acueducto"; 
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}

?>