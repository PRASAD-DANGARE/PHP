<!--

Function Name    :  Triangle with range function
Function Date    :  12 Oct 2020
Function Author  :  Prasad Dangare
Output           :  AAAAA
                 :  BBBB
                 :  CCC
                 :  DD
                 :  E

-->


<?php

$alpha = range('A', 'Z');

for ($i = 0; $i < 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo $alpha[$i];
    }

    echo "<br>";
}

?>