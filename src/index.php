<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Home | Shava.ua</title>
</head>

<body>
    <div class="wrapper">
        <?php require "blocks/header.php" ?>
        <?php require "blocks/nav.php" ?>
        <main class="main">
            <div class="main__other">
               
            </div>
            <div class="main__body">
                <?php for ($i = 1; $i <= 4; $i++) : ?>
                    <img class="main__img" src="img/img_<?php echo ($i) ?>.jpg" alt="Картинка">
                <?php endfor; ?>
            </div>
        </main>
        <?php require "blocks/footer.php" ?>
    </div>

    <script src="js/script.js"></script>
</body>

</html>