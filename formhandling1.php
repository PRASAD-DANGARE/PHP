<!--

Function Name    :  Form Handling Program Using GET Method
Function Date    :  23 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Name : Prasad Dangare
                 :  Age  : 18
                 :  Welcome Prasad Dangare
                 :  You Are 18 Years Old 

-->

<html>

<head>
    <title>PHP Form Handling Using GET Method</title>
</head>

<body>

    <?php

    if (isset($_GET["Name"]) || isset($_GET["Age"])) {
        echo "Welcome " . $_GET["Name"] . '<br />';
        echo "You Are " . $_GET["Age"] . "Years Old";
        exit();
    }

    ?>

    <form action="<?php $_php_self ?>" method="GET">
        <p>Name: <input type="text" Name="Name" /></p>
        <p>Age: <input type="text" Name="Age" /></p>

        <input type="submit" />
    </form>
</body>

</html>