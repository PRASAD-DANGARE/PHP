<!--

Function Name    :  Swapping Two Numbers
Function Date    :  14 Oct 2020
Function Author  :  Prasad Dangare
Output           :  After Swapping Value Of A In B :
                 :  a = 20b = 10
-->

<?php

$a = 10;
$b = 20;

// Swapping Logic  

$third = $a;
$a = $b;
$b = $third;
echo "After Swapping Value Of A In B : <br><br>";
echo "a = " . $a . "b = " . $b;
