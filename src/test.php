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
    <div class="wrapper">
        <div class="main__other">
            <style>
                .super-class {
                    color: red;
                    font-size: 20px;
                    margin: 10px 0;
                    padding: 0;
                }
            </style>
            <?php
            $nameStr = "R";
            $tagInnerH1 = "Hellow World";
            $tagClassH1 = "super-class";

            for ($i = 1; $i <= 5; $i++) {
                $addClassH1["$nameStr" . $i] = "<h1 class=\"$tagClassH1\">$tagInnerH1 $i</h1>";
                echo $addClassH1["$nameStr" . $i];
            }
            ?>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>