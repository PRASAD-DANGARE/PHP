<!--

Function Name    :  Preserve Value Across The Function Then Create Static Local Variable 
Function Date    :  27 Oct 2020
Function Author  :  Prasad Dangare
Output           :  11 11 12 13

-->

<?php

function fun()
{
    static $x = 11; // 11
    echo $x;
    $x++;
}

fun(); // 11
fun(); // 12
fun(); // 13
