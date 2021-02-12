<!--

Function Name    :  Associative Array In PHP
Function Date    :  12 Feb 2021
Function Author  :  Prasad Dangare
Output           :  56
					Hrutik - 32
					Shubham - 39
					Shiva - 12
					Bhavana - 10
					Sakshi - 38
					Varad - 56
-->

<?php

	$students = array("Hrutik" => 32, "Shubham" => 39, "Shiva" => 12, "Bhavana" =>10, "Sakshi" => 38);

	$students["Varad"] = 56;
	echo $students["Varad"]."<br>";

	foreach($students as $key => $value)
	{
		echo $key." - ".$value."<br>";
	}
?>