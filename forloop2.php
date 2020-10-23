<!--

Function Name    :  For Loop Using Array In It
Function Date    :  23 Oct 2020
Function Author  :  Prasad Dangare
Output           :  50

-->

<?php

$arr = array(10, 10, 20, 10);
$sum = 0;
$size = count($arr);
$i = 0;

for ($i = 0; $i < $size; $i++) {
    $sum = $sum + $arr[$i];
}
echo ($sum); // 50
