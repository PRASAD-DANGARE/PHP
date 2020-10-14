<!--

Function Name    :  Number Printing In Triangle Format
Function Date    :  14 Oct 2020
Function Author  :  Prasad Dangare
Output           :  1
                 :  12
                 :  123
                 :  1234
                 :  12345

-->

<?php

for ($i = 0; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }

    echo "<br>";
}
