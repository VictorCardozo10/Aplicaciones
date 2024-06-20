<?php
header('Content-Type: application/json');

// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exampleDB";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener datos de la tabla 'users'
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

$users = array();

// Procesar los resultados de la consulta
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

// Devolver los datos en formato JSON
echo json_encode($users);

// Cerrar la conexión
$conn->close();
?>
