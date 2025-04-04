<?php
$host = 'localhost';
$dbname = 'usuarios';
$username = 'root';
$password = '';

try {
    // Crear una nueva conexión PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Configurar el manejo de errores
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa con PDO.";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>