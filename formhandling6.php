<!--

Function Name    :  Form Handling To Check Whather A Number Is Palindrome Or Not
Function Date    :  27 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Enter The Value : 1, 10 
                 :  1 Is Palindrome, 10 Is Not A Palindrome

-->

<html>

<head>
    <title>Check Whather A Number Is Palindrome Or Not Using FromHandling</title>
</head>

<body>

    <?php

    if ($_POST) {

        $No = $_POST['num'];

        $Reverse = strrev($No);

        if ($No == $Reverse) {
            echo "$No Is Palindrome";
        } else {
            echo "$No Not A Palindrome";
        }
    }
    ?>

    <form method="post">

        Enter The Number: <input type="text" name="num" /><br><br>
        <input type="submit" value="Submit">

    </form>

</body>

</html>