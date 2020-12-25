<?php

    if ($_POST == null) {
        echo "<h3 class=\"content-body__item\">" . "Super Block 1" . "</h3>";
    } 
    else {
        $LongArray = $_POST['LongArray'];
    
        // echo var_dump($LongArray);
    
        for ($i = 1; $i <= $LongArray; $i++) {
            echo "<h3 class=\"content-body__item\">" . "Super Block $i" . "</h3>";
        }
    }

?>