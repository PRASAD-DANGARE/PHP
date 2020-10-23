<!--

Function Name    :  Form Handling Program Using POST Method
Function Date    :  23 Oct 2020
Function Author  :  Prasad Dangare
Output           :  FirstName : Prasad 
                 :  LastName  : Dangare
                 :  First Name Is Prasad
                 :  Last Name Is Dangare 

-->

<html>

<head>
    <title>PHP Form Handling Using POST Method</title>
</head>

<body>

    <?php

    if (isset($_POST["FirstName"]) || isset($_POST["LastName"])) {
        echo "FirstName Is " . $_POST["FirstName"] . '<br />';
        echo "LastName Is " . $_POST["LastName"];
        exit();
    }

    ?>

    <form action="<?php $_php_self ?>" method="POST">
        <p>FirstName: <input type="text" Name="FirstName" /></p>
        <p>LastName: <input type="text" Name="LastName" /></p>

        <input type="submit" />
    </form>
</body>

</html>