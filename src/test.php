<?php

use Empire\Warrior as EmpireWarrior;
use Republic\Warrior as RepublicWarrior;

    $title = 'Test';
    require ('blocks/header.php');
    require ('blocks/nav.php');
    require ('blocks/republicWarrior.php');
    require ('blocks/empireWarrior.php');
?>
    <div class="wrapper">
        <div class="main__other">
            <?php
                $RepWario1 = new RepublicWarrior();
                $EmpWario1 = new EmpireWarrior();

                var_dump($RepWario1);
                var_dump($EmpWario1);

            ?>
        </div>
    </div>
<?php require ('blocks/footer.php'); ?>
