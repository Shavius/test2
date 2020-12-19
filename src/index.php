<?php
    $title = 'Home';
    require ('blocks/header.php');
    require ('blocks/nav.php');
?>
    <div class="wrapper">
        <main class="main">
            <div class="main__other">

            </div>
            <div class="main__body">
                <?php for ($i = 1; $i <= 4; $i++) : ?>
                    <img class="main__img" src="img/img_<?php echo ($i) ?>.jpg" alt="Картинка">
                <?php endfor; ?>
            </div>
        </main>
    </div>
<?php require ('blocks/footer.php'); ?>
