<?php
$title = 'Home';
require('blocks/header.php');
require('blocks/nav.php');
?>
<div class="wrapper">
    <main class="main">
        <div class="main__super-body">
            <h3 class="main__title">Super Body</h3>
            <button class="main__btn start">Запустить</button>
            <button class="main__btn reset">Сбросить</button>
            <form>
                <input class="main__input" type="text" name="numb" value="2">
            </form>
            <div class="main__content content-body">
                <?php require('blocks/Super.php'); ?>
            </div>
        </div>
        <div class="main__other">
        </div>
        <div class="main__body">
            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <img class="main__img" src="img/img_<?php echo ($i) ?>.jpg" alt="Картинка">
            <?php endfor; ?>
        </div>
    </main>
</div>
<?php require('blocks/footer.php'); ?>