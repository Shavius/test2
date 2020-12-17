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

                $super_array = [
                    'First' => 'Torald',
                    'Second' => 'Reng',
                ];

                class super_1 {
                    public $name = 'name_1';
                    public $surName = 'surName_1';

                    public function R1 ($c = '') {
                        $a = $this -> name;
                        $b = $this -> surName;

                        return $a . '<br>' . $b . $c;
                    }
                }

                $admin = New super_1();
                $admin->name = $super_array['First'];
                $admin->surName = $super_array['Second'];
                echo $admin->R1() . '<br>';






            ?>
        </main>
        <?php require "blocks/footer.php" ?>
    </div>

    <script src="js/script.js"></script>
</body>

</html>