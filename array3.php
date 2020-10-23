<!--

Function Name    :  Associative Array
Function Date    :  23 Oct 2020
Function Author  :  Prasad Dangare
Output           :  4
                 :  5

-->

<?php

$language = array(
    "C" => "3",
    "C++" => "7",
    "JAVA" => "5",
    "PHP" => "2"
);

echo count($language); // 4 Is The Total Languages
echo "<br>";

echo $language["JAVA"]; // 5 Is The Place Where java Is Hold
