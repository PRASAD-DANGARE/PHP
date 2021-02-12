<!--

Function Name    :  Use Of Array With Loop In PHP
Function Date    :  12 Feb 2021
Function Author  :  Prasad Dangare
Output           :  76
                    Shiva - Pune
                    Hrutik - 83
                    56 - 76
                    Shubham - 79
                    56
                    67
                    76
                    89
                    64
-->

<!DOCTYPE html>

<html>
    <head>
        <title>PHP WITH HTML</title>
    </head>

    <body>
        <h1>Array Demo</h1>
	
        <?php
		    $students = array();    // This will create an empty array
		    $students = ["Shiva" => "Pune", "Hrutik" => 83, 56 => 76, "Shubham" => 79];
		    echo $students[56]." <br>";

		    foreach($students as $key => $value)
            {
			    echo $key." - ".$value."<br>";
		    }

		    $marks = array(56, 67, 76, 89, 64);   // foreach loop used for numeric indexed array
		    foreach($marks as $value)
            {
			    echo $value."<br>";
		    }
	    ?>
    </body>
</html>