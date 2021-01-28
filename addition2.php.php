<!--

Description      :  Addition Of 2 Numbers From User
Function Author  :  Prasad Dangare
Function Date    :  28 Jan 2021
Output           :  Display The Addition Of Two Numbers

-->

<html>  

    <body>  
        <form method = "post">  
            
            Enter First Number :  
            <input type = "number" name = "no1" /> <br><br>  
            
            Enter Second Number :  
            <input type = "number" name = "no2" /> <br><br>  
            <input  type = "submit" name = "submit" value = "Add">  
        </form>  
        
        <?php  
            if(isset($_POST['submit']))  
            {  
                $no1 = $_POST['no1'];  
                $no2 = $_POST['no2'];  
                $sum =  $no1 + $no2;     
                echo "The Sum Of $no1 And $no2 Is : ".$sum;   
            }  
        ?>  
    </body>  
</html>  