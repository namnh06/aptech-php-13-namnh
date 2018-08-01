<?php
$SERVER_NAME = 'localhost';
$SERVER_USER = 'root';
$SERVER_PASSWORD = '';

$connect = mysqli_connect($SERVER_NAME, $SERVER_USER, $SERVER_PASSWORD);

if (!$connect) {
  die('connection failed');
}

echo 'connect is successfully<br>';

$SERVER_DATABASE_NAME = "aptech_php_13_created_by_php";
$sql = "CREATE DATABASE $SERVER_DATABASE_NAME";

if ($connect->query($sql) === true) {
  echo "Database $SERVER_DATABASE_NAME is created<br>";
} else {
  die("Error while create database $SERVER_DATABASE_NAME, message : $connect->error");
}

$SERVER_TABLE_NAME = 'users';
$sql = "CREATE TABLE $SERVER_TABLE_NAME (
  id int PRIMARY KEY AUTO_INCREMENT,
  name varchar(50),
  email varchar(100) NOT NULL unique,
  password varchar(50)
)";

if ($connect->query($sql) === true) {
  echo "Create $SERVER_TABLE_NAME is successfully";
} else {
  die("Error while create table $SERVER_TABLE_NAME, message : $connect->error");
}
