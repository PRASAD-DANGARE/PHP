<!--

Function Name    :  PHP Program To Print Stars In Kit Pattern
Function Date    :  17 Oct 2020
Function Author  :  Prasad Dangare
Output           :  *
                 :  * *
                 :  * * *
                 :  * * * *
                 :  * * * * *
                 :  * * * *
                 :  * * *
                 :  * *
                 :  *
-->

<?php
for ($i = 0; $i <= 5; $i++) {
    for ($k = 5; $k >= $i; $k--) {
        echo "  ";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*  ";
    }
    echo "<br>";
}
for ($i = 4; $i >= 1; $i--) {
    for ($k = 5; $k >= $i; $k--) {
        echo "  ";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*  ";
    }
    echo "<br>";
}
?>