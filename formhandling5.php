<!--

Function Name    :  Form Handling To Check Weather Number Is Armstrong Or Not
Function Date    :  27 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Enter The Value : 1 , 2
                 :  1 Its An Armstrong Value, 2 Not An Armstrong Value

-->

<html>

<head>
    <title>To Find Armstrong Number Using FormHandling</title>
</head>

<body>

    <?php

    if ($_POST) {
        $value = $_POST['number'];
        $armstrong = $value;
        $no  = 0;
        while ($armstrong != 0) {
            $reminder   = $armstrong % 10;
            $no   = $no + ($reminder * $reminder * $reminder);
            $armstrong   = $armstrong / 10;
        }

        if ($value == $no) {
            echo "$value Its An Armstrong Value";
        } else {
            echo "$value Not An Armstrong Value";
        }
    }
    ?>

    <form method="post">
        Enter The Value : <br>
        <input type="number" name="number">
        <input type="submit" value="Submit">
    </form>

</body>

</html>