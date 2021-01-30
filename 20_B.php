<!--

Function Name    :  Find Armstrong Number From User
Function Author  :  Prasad Dangare
Function Date    :  30 Jan 2021
Output           :  Get The Armstrong Number From User

-->

<?php  
	
	$num = 407;  
	$total = 0;  
	$x = $num;  
	
	while($x != 0)  
	{  
		$rem = $x % 10;  
		$total = $total + $rem * $rem * $rem;  
		$x = $x / 10;  
	}  
	
	if($num == $total)  
	{  
		echo "Yes It Is An Armstrong Number";  
	}  
	
	else  
	{  
		echo "No It's Not An Armstrong Number";  
	}  
?>  
