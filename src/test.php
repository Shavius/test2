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

                // var_dump($RepWario1);
                // var_dump($RepWarioElite1);
 
                $warriorArray = [
                    $RepWario1->getProperties(),
                    $RepWarioElite1->getProperties(),
                    $EmpWario1->getProperties(),
                    $EmpWarioElite1->getProperties(),
                ];
            ?>
            <? for ($i = 0; $i < count($warriorArray); $i++): ?>
                <h2 class="main__title"><?= $warriorArray[$i]; ?></h2>
            <? endfor ?>
        </div>
    </div>
<?php require ('blocks/footer.php'); ?>
