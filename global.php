<!--

Function Name    :  Variable Define Outside The Function Then It Is Global Variable 
Function Date    :  27 Oct 2020
Function Author  :  Prasad Dangare
Output           :  10 10 11 11

-->

<?php

$no = 10;

function fun()
{
    echo $no; // Error
    global $no;
    echo $no; // 10
    $no = 11;
    echo $no; // 11
}

echo $no; // 10
fun(); // 11
echo $no; // 11
