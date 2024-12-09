<?php
// Incluir conexión
include 'conexion.php';

// Verificar que los datos se envíen por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    // Preparar consulta
    $sql = "INSERT INTO Formulario (nombre, correo, telefono, Mensaje) 
            VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "¡Datos guardados exitosamente!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Acceso no permitido.";
}
?>
