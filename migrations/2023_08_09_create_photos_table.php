<?php

require_once '../config.php';

$sql = "CREATE TABLE photos (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    image_filename VARCHAR(255),
    title VARCHAR(255),
    tweet_count INT,
    like_count INT
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela criada com sucesso";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

$conn->close();
