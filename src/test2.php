<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.min.css">
    <title>test2 | Shava.ua</title>
</head>

<body>
    <div class="wrapper">
        <?php require "blocks/header.php" ?>
        <?php require "blocks/nav.php" ?>
        <?php require "blocks/functions.php" ?>
        <main class="main">
            <?php

                class R1 {
                    public $name1 = 'Name_1';
                    public $name2 = 'Name_2';

                    public function echoName () {
                        return $this->name1 . '<br>' . $this->name2 . '<br>';
                    }
                }

                $admin = New R1();
                echo $admin->echoName();

            ?>
        </main>
        <?php require "blocks/footer.php" ?>
    </div>

    <script src="js/script.js"></script>
</body>

</html>