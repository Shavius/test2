<?php
    $time_d = date('d');
    $time_m = date('m');
    $time_y = date('Y');
    $timeRes = "$time_d.$time_m.$time_y";
?>
<footer class="footer">
    <p class="footer__text">shava.ua<br>&copy; Все права защищены 2020 г.<br>Ткущая дата: <?php echo "$timeRes" ?></p>
</footer>