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

                class R2  extends R1{
                    public $names1 = "Names_1";
                    public $names2 = "Names_1";
                }

                $admin1 = New R1();
                $admin2 = New R2();

                $admin1 -> name1 = 'Hellow Name_1';
                $admin1 -> name2 = 'Hellow Name_2';

                echo $admin1->echoName();
                echo $admin2->echoName();
                echo '<br>';
                echo $admin2->names1 . '<br>';
                echo $admin2->names2 . '<br>';

                var_dump($admin1);
                var_dump($admin2);

                interface JT1 {
                    function getName ();
                }

                class Testing implements JT1 {
                    public $name1 = 'Tringer';
                    public $name2 = 'Aladar';

                    function getName() {
                        $a = $this -> name1;
                        $b = $this -> name2;
                        return $a . ' ' . $b;
                    }
                }

                $testing1 = New Testing();
                echo $testing1->getName();

            ?>
        </main>
        <?php require "blocks/footer.php" ?>
    </div>

    <script src="js/script.js"></script>
</body>

</html>