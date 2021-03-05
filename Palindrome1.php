<!--

Description      :  Accept String From User And Check Whether Given String Is Palindrome Or Not
Function Date    :  05 Mar 2021
Function Author  :  Prasad Dangare
Output / Input   :  String

-->

<html>
  <form method = "post">

    Enter A String : <input type = "text" name = "num"/> <br><br>  
    <button type = "submit"> Check </button> 
  </form>  

  <?php   
    if($_POST)  
    {  
        $num = $_POST['num'];  
      
        $reverse = strrev($num);  //reversing the number  
          
        if($num == $reverse) //Checking If The String And Reverse Is Equal  
        {  
            echo "The String $num Is Palindrome";     
        }
        else
        {  
            echo "The String $num Is Not A Palindrome";   
        }  
    }     
  ?>
</html>