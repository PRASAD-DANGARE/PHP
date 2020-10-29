<!--

Function Name    :  Super Global Variable Use To Access Global Variable Inside Function
Function Date    :  29 Oct 2020
Function Author  :  Prasad Dangare
Output           :  11
                 :  21
                 :  11
                 :  21
                 :  12
                 :  22

-->

<?php

$x = 11;
$y = 21;

function fun()
{
    $i = $GLOBALS["x"]; // 11
    $j = $GLOBALS["y"]; // 21

    echo $i . '<br>'; // display 11
    echo $j . '<br>'; // display 21

    $GLOBALS["x"] = 12;
    $GLOBALS["y"] = 22;
}

echo $x . '<br>'; // display 11
echo $y . '<br>'; // display 21

fun();
echo $x . '<br>'; // display 12
echo $y . '<br>'; // display 22
