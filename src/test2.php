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

                class shop {
                    public $name = 'Имя';
                    public $surName = 'Фамилия';

                    public function naming ($n = 'default', $f = "name1") {
                        if ($f == "name1" || $f == "name2") {
                            $this -> name1 = $n;
                            $this -> name2 = 10 + 20;
                            return $this -> $f;
                        } else {
                            return 'none';
                        }
                        
                    }
                }

                class super_1 {
                    public $name = 'name';
                    public $surName = 'surName';

                    public function R1 ($a) {
                        return $this -> $a;
                    }
                }

                // $superShop = New shop();
                // $admin = New shop();
                // $sName = "name1";
                // echo $superShop->naming('Hellow', $sName)  . "<br>";
                // echo $admin->name = "Joni" . "<br>";
                // echo $admin->name;
                // $admin->SuperName = "Mega men" . "<br>";
                // echo $admin->SuperName;
                // var_dump($admin);

                $test_1 = New super_1();
                $test_1 -> name = 'Joni';
                $test_1 -> surName = 'Elderg';
                $F1[] = $test_1 -> R1('name') . "<br>";
                $F1[] = $test_1 -> R1('surName') . "<br>";
                $F2 = $F1[0] . $F1[1];
                echo $F2;






            ?>
        </main>
        <?php require "blocks/footer.php" ?>
    </div>

    <script src="js/script.js"></script>
</body>

</html>