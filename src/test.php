<?php

use Empire\Warrior as EmpireWarrior;
use Empire\WarriorElite as EmpireWarriorElite;
use Republic\Warrior as RepublicWarrior;
use Republic\WarriorElite as RepublicWarriorElite;

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
                $RepWarioElite1 = new RepublicWarriorElite();

                $EmpWario1 = new EmpireWarrior();
                $EmpWarioElite1 = new EmpireWarriorElite();

                var_dump($RepWario1);
                var_dump($RepWarioElite1);

                var_dump($EmpWario1);
                var_dump($EmpWarioElite1);

            ?>
        </div>
    </div>
<?php require ('blocks/footer.php'); ?>
