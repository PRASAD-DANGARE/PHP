<!--

Function Name    :  Numeric Array In PHP
Function Date    :  12 Feb 2021
Function Author  :  Prasad Dangare
Output           :  The 4 th element in the array is bhavana
                    This is the value Shubham at 0 indexed position.
                    This is the value shiva at 1 indexed position.
                    This is the value hrutik at 2 indexed position.
                    This is the value bhavana at 3 indexed position.
                    This is the value varad at 4 indexed position.
-->

<?php

    $sybca_students = array();  
    $sybca_students = array("Shubham", "shiva", "hrutik", "bhavana", "varad");
    
    //$a = count($sybca_students);
    
    echo "The 4 th element in the array is ".$sybca_students[3]."<br>";
    
    //echo $a;
    
    for($i=0; $i < count($sybca_students); $i++)
    { 
        echo "This is the value ".$sybca_students[$i]." at ".$i." indexed position.<br>";
    }
?>