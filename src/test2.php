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

                class super_2 {
                    public $name_1;
                    public $name_2;

                    function __construct($name_1 = 0, $name_2 = 0) {
                        $this -> name_1 = $name_1;
                        $this -> name_2 = $name_2;
                    }

                    function R1 ($a = 0) {
                        if ($a == 1) return '--- ' . $this -> name_1 . ' ---' . '<br>' . '--- ' . $this -> name_2 . ' ---';
                        return $this -> name_1 . '<br>' . $this -> name_2;
                    }
                }

                $super_array2 = [
                    'R1' => 'Triger_1',
                    'R2' => 'Triger_2'
                ];

                $admin = New super_1();
                $admin->name = $super_array['First'];
                $admin->surName = $super_array['Second'];
                echo $admin->R1() . '<br>';
                
                
                $admin2 = New super_2($super_array2['R1'], $super_array2['R2']);
                echo $admin2->R1(1);






            ?>
        </main>
        <?php require "blocks/footer.php" ?>
    </div>

    <script src="js/script.js"></script>
</body>

</html>