<?php
    require __DIR__ . '/server/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="header">
                <div class="logo">
                    <img class="logo__img" src="https://www.geekslab.it/wp-content/uploads/2019/03/logo-spotify.png" alt="spotify logo">
                </div>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="albums">
                    <?php foreach ($database as $album) { ?>
                        <div class="album" v-for="album in albums">
                            <img class="album__img" src="<?= $album["poster"] ?>" alt="<?= $album["title"] ?>">
                            <h5 class="album__title"><?= $album["title"] ?></h5>
                            <span class="album__author"><?= $album["author"] ?></span>
                            <small class="album__year"><?= $album["year"] ?></small>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>    
</body>
</html>