<?php

use Republic\Warrior as RepublicWarrior;
use Empire\Warrior as EmpireWarrior;

    $title = 'Test';
    require ('blocks/header.php');
    require ('blocks/nav.php');
    require ('blocks/traits.php');
    require ('blocks/republic.php');
    require ('blocks/empire.php');

?>
    <div class="wrapper">
        <div class="main__other">
            <?php

                $RepublicSoldier_1 = new RepublicWarrior();
                $EmpireSoldier_1 = new EmpireWarrior();

                echo $RepublicSoldier_1->getProperties();
                echo ' ---- ' . $RepublicSoldier_1->hellowWorld();
                echo '<br>';
                
                echo $EmpireSoldier_1->getProperties();
                echo ' --- ' . $EmpireSoldier_1->hellowWorld();
                echo '<br>';

                var_dump($RepublicSoldier_1);
                var_dump($EmpireSoldier_1);

            ?>
        </div>
    </div>
<?php require ('blocks/footer.php'); ?>
