<!--

Function Name    :  We Can Create Our Own User Define Constant By Using define Method
Function Date    :  26 Oct 2020
Function Author  :  Prasad Dangare
Output           :  10 10 20 20

-->

<?php

define("MAX", 10); // Not Case-Sensitive

echo MAX . '<br />'; // 10

echo MAX . '<br /><br />'; // 10

define("MIN", 20, true); // Case-Sensitive

echo MIN . '<br />'; // 20
echo MIN; // 20
