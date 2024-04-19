<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

$rol = $_SESSION["rol"];
$username = $_SESSION["username"];

$servername = "localhost";
$username_db = "root"; // Cambiado para evitar conflicto de nombres de variables
$password = "";
$dbname = "empresa";

$conn = new mysqli($servername, $username_db, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "<p>Bienvenido, $username</p>";

if ($rol == "admin") {
    // Mostrar formulario de administrador con lista de usuarios
    $query = "SELECT * FROM usuarios";
    $result = $conn->query($query);

    echo '<h3>Lista de Usuarios</h3>';
    echo '<ul>';
    while ($row = $result->fetch_assoc()) {
        echo '<li>ID: ' . $row['id'] . ' - Usuario: ' . $row['username'] . ' - Rol: ' . $row['rol'] . '</li>';
    }
    echo '</ul>';

    echo '<a href="index.php" class="btn btn-secondary mt-3">Regresar</a>';
} elseif ($rol == "supervisor") {
    // Mostrar formulario de supervisor con lista de empleados
    $query = "SELECT * FROM empleados";
    $result = $conn->query($query);

    echo '<h3>Lista de Empleados</h3>';
    echo '<ul>';
    while ($row = $result->fetch_assoc()) {
        echo '<li>ID: ' . $row['Idemp'] . ' - Nombre: ' . $row['nombre'] . ' ' . $row['primapellido'] . ' - Puesto: ' . $row['puesto'] . ' - Sueldo: ' . $row['sueldodia'] . '</li>';
    }
    echo '</ul>';

    echo '<a href="index.php" class="btn btn-secondary mt-3">Regresar</a>';
} else {
    echo '<p>No tienes un rol válido para acceder a esta página.</p>';
}

$conn->close();
?>