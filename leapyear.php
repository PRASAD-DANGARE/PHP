<!--

Function Name    :  Find A LEAP YEAR
Function Author  :  Prasad Dangare
Function Date    :  14 Oct 2020
Output           :  2020 Is A Leap Year

-->


<?php

function Leap_Year($current_year)
{
   if ($current_year % 400 == 0)
      print("It Is A Leap Year");
   if ($current_year % 4 == 0)
      print("It Is A Leap Year");
   else if ($current_year % 100 == 0)
      print("It Is Not A Leap Year");
   else
      print("It Is Not A Leap Year");
}
$current_year = 2020;

Leap_Year($current_year);

?>
