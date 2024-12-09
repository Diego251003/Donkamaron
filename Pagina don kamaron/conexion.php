<?php
$servername = "localhost"; // Cambia según tu configuración
$username = "root";        // Cambia según tu configuración
$password = "Root";            // Cambia según tu configuración
$dbname = "Contactanos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
