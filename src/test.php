<?php

use Rep\Warrior as RepWarrior;
use Rep\WarriorElite as RepWarriorElite;
use Emp\Warrior as EmpWarrior;
use Emp\WarriorElite as EmpWarriorElite;

$title = 'Test';
require ('blocks/header.php');
require ('blocks/nav.php');
require ('blocks/modules.php');
require ('blocks/empireWarrior.php');
require ('blocks/republicWarrior.php');



?>
    <div class="wrapper">
        <div class="main__other">
            <?php
            
                $RepWarrior1 = new RepWarrior();
                $RepWarriorElita1 = new RepWarriorElite();
                echo $RepWarrior1->getProperties() . "<br>";


                $EmpWarrior1 = new EmpWarrior();
                $EmpWarriorElita1 = new EmpWarriorElite();
                echo $EmpWarrior1->getProperties() . "<br>";

                var_dump($RepWarrior1);
                var_dump($RepWarriorElita1);
                var_dump($EmpWarrior1);
                var_dump($EmpWarriorElita1);

            ?>
        </div>
    </div>
<?php require ('blocks/footer.php'); ?>
