<?php

$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'test';

try {
  $connect = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Ha fallado la conexión: ' . $e->getMessage());
}

?>