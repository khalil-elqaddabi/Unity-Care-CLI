<?php
$host = 'localhost';
$dbname = 'backend v1 unity care clinic';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password);
    $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e) {
    die("connection failed ... " . $e->getMessage());

}

?>