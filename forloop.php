<!--

Function Name    :  For Loop In PHP
Function Date    :  12 Oct 2020
Function Author  :  Prasad Dangare
Output           :   AAAAA
                 :   BBBB
                 :   CCC
                 :   DD
                 :   E

-->


<?php for ($i = 65; $i <= 69; $i++) {
    for ($j = 5; $j >= $i - 64; $j--) {
        echo chr($i);
    }
    echo "<br>";
}
?>