<?php
    $cookie_name = "user";
    $cookie_value = "cookies user";
    setcookie($cookie_name, $cookie_value, time() + 60);
    // session_start();
    // $_SESSION['Hellow'] = 'hellow';
?>

<?php

use Republic\Warrior as RepublicWarrior;
use Republic\WarriorElite as RepublicWarriorElite;
use Empire\Warrior as EmpireWarrior;
use Empire\WarriorElite as EmpireWarriorElite;

    $title = 'Test2';
    require ('blocks/header.php');
    require ('blocks/nav.php');
    require ('blocks/interfaceCommonwealth.php');
    require ('blocks/traits.php');
    require ('blocks/republic.php');
    require ('blocks/empire.php');

?>

<?php

    echo "Вывод Куков" . "<br>";
    var_dump($_COOKIE);
    echo "Вывод Сессии" . "<br>";
    var_dump($_SESSION);

?>

<?php require ('blocks/footer.php'); ?>