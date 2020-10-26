<!--

Function Name    :  foreach Loop Using Array In It
Function Date    :  26 Oct 2020
Function Author  :  Prasad Dangare
Output           :  15

-->

<?php

$arr = array(1, 2, 3, 4, 5);
$sum = 0; // starts From O Onwards , And Then +

$size = count($arr); //  We Can Also Use This Instead Of $sum = 0;
$i = 0;

foreach ($arr as $value) {
    $sum = $sum + $value;
}

echo $sum; // 15 
