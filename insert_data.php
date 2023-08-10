<?php

require_once 'config.php';

$sql = "INSERT INTO photos (image_filename, title, tweet_count, like_count)
        VALUES ('foto1.jpg', 'Foto 1', 10, 5),
               ('foto2.jpg', 'Foto 2', 20, 15),
               ('foto3.jpg', 'Foto 3', 15, 8),
               ('foto4.jpg', 'Foto 4', 8, 3),
               ('foto5.jpg', 'Foto 5', 25, 18),
               ('foto6.jpg', 'Foto 6', 12, 7),
               ('foto7.jpg', 'Foto 7', 18, 10),
               ('foto8.jpg', 'Foto 8', 7, 4),
               ('foto9.jpg', 'Foto 9', 22, 16),
               ('foto10.jpg', 'Foto 10', 14, 9),
               ('foto11.jpg', 'Foto 11', 9, 6),
               ('foto12.jpg', 'Foto 12', 16, 11),
               ('foto13.jpg', 'Foto 13', 11, 7),
               ('foto14.jpg', 'Foto 14', 19, 14),
               ('foto15.jpg', 'Foto 15', 13, 8),
               ('foto16.jpg', 'Foto 16', 21, 15),
               ('foto17.jpg', 'Foto 17', 17, 12),
               ('foto18.jpg', 'Foto 18', 6, 2),
               ('foto19.jpg', 'Foto 19', 23, 17),
               ('foto20.jpg', 'Foto 20', 30, 25)";

if ($conn->multi_query($sql) === TRUE) {
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$conn->close();
