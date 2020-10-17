<!--

Function Name    :  PHP Program To Print Stars In A Pattern
Function Date    :  17 Oct 2020
Function Author  :  Prasad Dangare
Output           :  *
                 :  * *
                 :  * * *
                 :  * * * *
                 :  * * * * *

-->


<?php

for ($i = 0; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
