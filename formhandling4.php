<!--

Function Name    :  Form Handling To Find Factorial Number 
Function Date    :  27 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Enter The Value : 10 .Submit
                 :  3628800 

-->

<html>

<head>
    <title>Factorial Of A Number Using FormHandling</title>
</head>

<body>

    <?php
    if ($_GET) {
        $factorial = 1;
        $value = $_GET['number'];
        echo "Factorial Number Is $value . <br>";
        for ($i = 1; $i <= $value; $i++) {
            $factorial = $factorial * $i;
        }
        echo $factorial . "<br>";
    }
    ?>

    <form method="get">
        Enter The Value: <br>
        <input type="number" name="number">
        <input type="submit" name="submit" />
    </form>

</body>

</html>