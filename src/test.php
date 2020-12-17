<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Test | Shava.ua</title>
</head>

<body>
    <div class="wrapper test">
    <?php require "blocks/nav.php" ?>
        <?php
        $titleDefault = "Hellow";
        $hellow = $titleDefault;
        $a = 500;
        $number = $_GET['input_1'];
        if ($number == null || ($number == '0' || $number == 0)) {
            $number = 1;
            $numberDefault = 5;
            $hellow = $titleDefault;
        } else if ($numberDefault == $numberDefault) {
            $numberDefault = $_GET['input_1'];
            $hellow = $_GET['input_2'];
        } else {
            $numberDefault = "zzz";
        }
        // var_dump($_GET);
        // var_dump($number);
        // var_dump($numberDefault);
        // var_dump($titleDefault);
        ?>
        <main class="main global-main">
            <? for ($i = 1; $i <= $number; $i++): ?>
            <? if ($i > 2 || $i == 1): ?>
            <h2 class="main__title"><?= "$hellow $i" ?></h2>
            <? else: ?>
            <h2 class="main__title"><?= "$hellow " . ++$a; ?></h2>
            <? endif ?>
            <? endfor ?>
        </main>

        <div class="form">
            <form action="" method="get">
                <h3 class="form__title">Введите число:</h3>
                <input class="text-input" type="tex" name="input_1" value="<?= $numberDefault ?>">
                <h3 class="form__title">Введите Название:</h3>
                <input class="text-input" type="tex" name="input_2" value="<?= $titleDefault ?>">
                <button>Применить</button>
            </form>
            <a href="/test.php">На главную</a>
            <button class="btn-color">Сменить цвет</button>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>