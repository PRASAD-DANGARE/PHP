<!--

Function Name    :  To Check Wether A Given Number Is Armstrong Or Not
Function Date    :  14 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Yes It Is An Armstrong Number

-->

<?php

$num = 407;
$total = 0;

$x = $num;
while ($x != 0) {
  $rem = $x % 10;
  $total = $total + $rem * $rem * $rem;
  $x = $x / 10;
}

if ($num == $total) {
  echo "Yes It Is An Armstrong Number";
} else {
  echo "No It Is Not An Armstrong Number";
}
