<?php

$servername = "localhost:3306";
$username = "root";
$password = "2212";
$dbname = "pfi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>