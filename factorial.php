<!--

Function Name    :  Factorial Of Numbers
Function Date    :  12 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Factorial Of 4 Is 24

-->

<?php

$num = 4;

$factorial = 1;

for ($x = $num; $x >= 1; $x--) {

  $factorial = $factorial * $x;
}

echo "Factorial Of $num Is $factorial";

?>