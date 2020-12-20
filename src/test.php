<?php

use Republic\Warrior as RepublicWarrior;
use Republic\R1 as RepublicR1;
use Empire\Warrior as EmpireWarrior;

$title = 'Test';
    require ('blocks/header.php');
    require ('blocks/nav.php');
    require ('blocks/interface.php');
    require ('blocks/Republic.php');
    require ('blocks/Empire.php');
?>
    <div class="main__other">
        <?php
            $RepublicSoldier_1 = new RepublicWarrior();
            $RepublicSoldier_2 = new RepublicR1();
            
            $EmpireSoldier_1 = new EmpireWarrior();

            echo $RepublicSoldier_1->getProperties() . '<br>';
            echo $RepublicSoldier_2->getProperties() . '<br>';

            echo $EmpireSoldier_1->getProperties() . '<br>';

            var_dump($RepublicSoldier_1);
            var_dump($RepublicSoldier_2);
        ?>
    </div>
    
<?php require ('blocks/footer.php'); ?>
