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
            <?php

                $RepublicSoldier_1 = new RepublicWarrior();
                $RepublicSoldierElite_1 = new RepublicWarriorElite();
                $EmpireSoldier_1 = new EmpireWarrior();
                $EmpireSoldierElite_1 = new EmpireWarriorElite();

                echo $RepublicSoldier_1->getProperties();
                echo ' - ' . $RepublicSoldier_1->hellowWorld();
                echo '<br>';

                echo $RepublicSoldierElite_1->getProperties();
                echo '<br>';
                
                echo $EmpireSoldier_1->getProperties();
                echo ' - ' . $EmpireSoldier_1->hellowWorld();
                echo '<br>';

                echo $EmpireSoldierElite_1->getProperties();
                echo '<br>';

                var_dump($RepublicSoldier_1);
                var_dump($RepublicSoldierElite_1);
                var_dump($EmpireSoldier_1);
                var_dump($EmpireSoldierElite_1);

            ?>
        </div>
    </div>
<?php require ('blocks/footer.php'); ?>
