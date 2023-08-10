<?php

$servername = "localhost";
$username = "root"; // Substitua pelo seu nome de usuário
$password = ""; // Substitua pela sua senha
$dbname = "gallery"; // Substitua pelo nome do banco de dados que você criou

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
