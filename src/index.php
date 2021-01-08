<?php

    use blocks\modules\People;

    define('OUTHER_PATH', 'blocks/view/other.php');
    define('MODULE_PATH', 'blocks/modules/');
    $title = 'Home';
    require_once(MODULE_PATH. 'PeopleInt.php');
    require_once(MODULE_PATH. 'People.php');
    require('blocks/header.php');
?>

<h1>Hellow World</h1>

<?php require('blocks/footer.php'); ?>

<!-- <?php require(OUTHER_PATH); ?> -->

<?php

    // Вывод класса
    $superPeople_1 = new People('Lenargo', 'Elf', 20);
    $superPeople_1->infoPeople();

    var_dump($superPeople_1);

?>
