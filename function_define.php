<!--

Function Name    :  Function Define In PHP
Function Date    :  12 Feb 2021
Function Author  :  Prasad Dangare
Output           :  I am using simple echo statement 14
                    I am now printing the constant using constant() function 14
                    The line number is 9
                    14
                    28
-->


<?php

    define("myvalue", 14);
    echo "I am using simple echo statement ".myvalue;
    echo "<br>I am now printing the constant using constant() function ".constant("myvalue");
    
    $abc = myvalue * 2;
    
    echo "<br>The line number is ".__LINE__;
    echo "<br>".myvalue;
    echo "<br>".$abc;
    
?>