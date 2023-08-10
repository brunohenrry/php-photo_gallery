<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <main class="content">
            <div class="contact-phone">
                <i class="fas fa-phone"></i> (123) 456-7890
            </div>
            <div class="header">
                <div class="logo">
                    <img src="images/logo.png" alt="Logo">
                </div>
                <div class="page-links">
                    <a href="#">Pagina 1</a>
                    <a href="#">Pagina 2</a>
                    <a href="#">Pagina 3</a>
                    <a href="#">Pagina 4</a>
                    <a href="#">Pagina 5</a>
                    <a href="#">Pagina 6</a>
                    <a href="#">Pagina 7</a>
                </div>
            </div>

            <hr>

            <ul class="gallery">
                <?php foreach ($photos as $photo): ?>
                    <li>
                        <div class="imgwrap">
                            <img src="images/<?php echo $photo->image_filename; ?>" alt="image">
                        </div>
                        <p class="album-title"><?php echo $photo->title; ?></p>
                        <hr class="line">
                        <div class="actions">
                            <div class="action-btn">
                                <i class="fab fa-twitter"></i> Tweet
                                <span class="action-count">56</span>
                            </div>
                            <div class="action-btn">
                                <i class="far fa-heart"></i> Like
                                <span class="action-count">56</span>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            
            <hr class="line">
            
            <footer>
                <div class="made-by">
                    <div class="person-or-company">
                        <img src="images/photographer.jpg" alt="Person or Company">
                        <div class="text">
                            <div class="name">Pessoa ou Empresa</div>
                            <div class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                It has survived not only five centuries, but also the leap into electronic typesetting, 
                                remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            
            <hr>
            
            <footer>
                <p class="rights">Todos os direitos reservados ©</p>
            </footer>
        </main>
    </div>
</body>
</html>
