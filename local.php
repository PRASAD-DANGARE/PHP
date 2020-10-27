<!--

Function Name    :  Defining Variable Inside Function Is Called Local Variable
Function Date    :  27 Oct 2020
Function Author  :  Prasad Dangare
Output           :  11

-->

<?php

function fun()
{
    $x = 11; // local variable
    echo $x; // 11 Is Display
}

fun();
echo $x; // Error Outside The Function
