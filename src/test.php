<?php

use Republic\Warrior as RepublicWarrior;

    $title = 'Test';
    require ('blocks/header.php');
    require ('blocks/nav.php');
    require ('blocks/traits.php');
    require ('blocks/republic.php');
?>
    <div class="wrapper">
        <div class="main__other">
            <?php

                $RepublicSoldier_1 = new RepublicWarrior();

                echo $RepublicSoldier_1->getProperties();
                echo ' ---- ' . $RepublicSoldier_1->hellowWorld();
                echo '<br>';

                var_dump($RepublicSoldier_1);

            ?>
        </div>
    </div>
<?php require ('blocks/footer.php'); ?>
