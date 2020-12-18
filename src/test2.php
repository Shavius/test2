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

                interface gtName {
                    function getName ();
                    function getStatus ();
                }

                interface spName {
                    function superName ();
                }

                class Testing implements gtName, spName {
                    public $firstName = 'Tringer';
                    public $SecondName = 'Aladar';
                    public $wordSpeace = ' ';
                    public $status = 'Admin';

                    function getName() {
                        $a = $this -> firstName;
                        $b = $this -> SecondName;
                        $c = $this -> wordSpeace;
                        return $a . $c . $b . $c;
                    }

                    function getStatus ($sp = ' - ') {
                        $a = $this -> status;
                        return $sp . $a . '<br>';
                    }

                    function superName($superName = 'Super Name: ') {
                        $a = $superName;
                        $a .= $this -> firstName;
                        $a .= ' ------- ';
                        $a .= $this -> SecondName;
                        return $a;
                    }
                }

                $testing1 = New Testing();
                $testing1->firstName = 'Alazar';
                $testing1->SecondName = 'Tron';
                echo $testing1->getName();
                echo $testing1->getStatus(' --- ');
                echo $testing1->superName();


                class base1 {
                    public function bs1 () {
                        echo '<br> Hellow ';
                    }
                }

                trait base2 {
                    public function bs1 () {
                        parent::bs1();
                        echo 'World';
                    }
                }

                class base3 extends base1 {
                    use base2;
                }

                $obj = New base3();
                $obj->bs1();

            ?>
        </main>
        <?php require "blocks/footer.php" ?>
    </div>

    <script src="js/script.js"></script>
</body>

</html>