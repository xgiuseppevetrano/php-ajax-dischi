<?php
    require __DIR__ . '/server/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($database as $album) { ?>
            <img src="<?= $album["poster"] ?>" alt="<?= $album["title"] ?>">
            <h1><?= $album["title"] ?></h1>
            <h3><?= $album["author"] ?></h3>
            <span><?= $album["genre"] ?></span>
            <small><?= $album["year"] ?></small>
            <hr>
        <?php } ?>
    </ul>
</body>
</html>