<!--

Function Name    :  PHP Program To Print Numbers
Function Date    :  17 Oct 2020
Function Author  :  Prasad Dangare
Output           :  1
                 :  2 3
                 :  4 5 6
                 :  7 8 9 10

-->

<?php

$k = 1;
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $k . " ";
        $k++;
    }
    echo "<br>";
}
