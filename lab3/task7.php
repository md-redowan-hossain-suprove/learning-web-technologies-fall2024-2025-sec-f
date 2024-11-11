<?php

    // 1
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo " * ";
        }
        echo "<br>";
    }
    echo "<br><br>";
 
    // 2
    $number = 1;
    for ($i = 3; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$number ";
            $number++;
        }
        echo "<br>";
    }
    echo "<br><br>";
 
    // 3
    $char = 'A';
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$char ";
            $char++;
        }
        echo "<br>";
    }
?>
 