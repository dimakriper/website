<?php
// Load .env file
$env = parse_ini_file('.env.txt');

$host = $env['DB_HOST']; // Хост
$dbname = $env['DB_NAME']; // Имя базы данных
$username = $env['DB_USER']; // Имя пользователя
$password = $env['DB_PASS']; // Пароль

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}
?>
