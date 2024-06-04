<?php
require 'config.php';

try {
    $pdo = new PDO(
        "mysql:host={$config['db_host']};dbname={$config['db_name']}",
        $config['db_user'],
        $config['db_pass']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión exitosa a la base de datos.";
    
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
