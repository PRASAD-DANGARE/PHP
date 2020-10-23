<!--

Function Name    :  PHP Program To Understand The Use Of Function 
Function Date    :  23 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Inside Add : 21

-->

<?php

function add($no1, $no2)
{
    echo "Inside Add : ";
    return $no1 + $no2;
}

$ret = add(10, 11);
echo $ret;
