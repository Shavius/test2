<?php

    use blocks\modules\People;

    $title = 'Home';
    require_once('blocks/path.php');
    require_once(PATH_MODULES. 'PeopleInt.php');
    require_once(PATH_MODULES. 'People.php');
    require_once(PATH_BLOCKS. 'header.php');
?>

<h1>Hellow World</h1>

<?php
    $superPeople_1 = new People('Lenargo', 'Elf', 20);
    $superPeople_1->infoPeople();
    var_dump($superPeople_1);
?>

<?php require_once(PATH_BLOCKS. 'footer.php'); ?>
