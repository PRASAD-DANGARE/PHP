<!--

Function Name    :  Reverse A Given Number
Function Date    :  14 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Reverse Number Of 12345 Is : 54321

-->

<?php

$num = 12345;
$revnum = 0;
while ($num > 1) {
    $rem = $num % 10;
    $revnum = ($revnum * 10) + $rem;
    $num = ($num / 10);
}
echo "Reverse Number Of 12345 Is : $revnum";
