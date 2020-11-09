<?php

$servername = "localhost";
$database = "id15278119_cities";
$username = "id15278119_admin";
$password = "yEpYoSHsn#&b3Neu";

// Создание соединения
$conn = mysqli_connect($servername, $username, $password, $database);

// Проверка
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}