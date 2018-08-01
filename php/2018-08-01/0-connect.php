<?php
$SERVER_NAME = 'localhost';
$SERVER_USER = 'root';
$SERVER_PASSWORD = '';

$connect = mysqli_connect($SERVER_NAME, $SERVER_USER, $SERVER_PASSWORD);

if (!$connect) {
  die('connection failed');
}

echo 'connect is successfully<br>';

$database = "aptech_php_13_created_by_php";
$sql = "CREATE DATABASE $";

if ($connect->query($sql) === true) {
//  echo "Database $"
};

$userLogin = $_POST['user'];
$sql = "SELECT * FROM users WHERE nam = $userLogin";