<?php
// config.php - database connection
$host = '127.0.0.1';
$db   = 'inventory_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_error);
}
session_start();
?>