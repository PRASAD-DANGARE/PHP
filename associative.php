<!--

Function Name    :  Traversal In Associative Array
Function Date    :  27 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Name : Prasad
                 :  Amount : 1000

                 :  Name : Shiva
                 :  Amount : 2000

                 :  Name : Hrutik
                 :  Amount : 3000

                 :  Name : Shubham
                 :  Amount : 4000


-->

<?php

$salary = array("Prasad" => 1000, "Shiva" => 2000, "Hrutik" => 3000, "Shubham" => 4000);

foreach ($salary as $key => $value) {
    echo "Name : " . $key;
    echo "<br />Amount : " . $value . '<br /><br />';
}
