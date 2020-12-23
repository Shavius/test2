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
            <div class="my-ip">
                <h3>Мой ip</h3>
                <p class="my-ip__body"></p>
            </div>
            <div class="forms">
                <form class="forms__form" action="">
                    Email: <br>
                    <input name="email" type="email"> <br>
                    Телефон: <br>
                    <input name="phone" type="text"> <br>
                    Имя: <br>
                    <input name="name" type="text"> <br>
                    <br>
                    <input id="send" type="button" value="Отправить">
                    <br>
                    <br>
                </form>
                <div class="result"></div>
            </div>
        </div>
    </div>
<?php require ('blocks/footer.php'); ?>
