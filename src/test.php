<?php

use Rep\Warrior as RepWarrior;
use Emp\Warrior as EmpWarrior;

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
                echo $RepWarrior1->getProperties() . "<br>";

                $EmpWarrior1 = new EmpWarrior();
                echo $EmpWarrior1->getProperties() . "<br>";

                var_dump($RepWarrior1);
                var_dump($EmpWarrior1);

            ?>
        </div>
    </div>
<?php require ('blocks/footer.php'); ?>
