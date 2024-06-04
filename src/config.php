<?php
require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


$config = [
    'db_host' => $_ENV['HOST'],
    'db_name' => $_ENV['BD'],
    'db_user' => $_ENV['USER'],
    'db_pass' => $_ENV['PASSWORD'],
    'PORT' => 3306
];



