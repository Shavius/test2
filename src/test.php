<?php

use Republic\Warrior as RepublicWarrior;
use Republic\WarriorElite as RepublicWarriorElite;
use Empire\Warrior as EmpireWarrior;
use Empire\WarriorElite as EmpireWarriorElite;

    $title = 'Test';
    require ('blocks/header.php');
    require ('blocks/nav.php');
    require ('blocks/interfaceCommonwealth.php');
    require ('blocks/traits.php');
    require ('blocks/republic.php');
    require ('blocks/empire.php');

?>
    <div class="wrapper">
        <div class="main__other">
            <input id="show_ip" type="button" name="" value="Показать мой ip" >
            <div class="my_ip">Мой ip</div>
        </div>
    </div>
<?php require ('blocks/footer.php'); ?>
