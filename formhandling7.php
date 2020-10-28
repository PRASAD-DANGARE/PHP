<!--

Function Name    :  Form Handling To Perform Addition,Subtraction,Division,Multiplication In It
Function Date    :  28 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Add Number1 : 10
                 :  Add Number2 : 2
                 :  The Addition Of 10 And 2 Is : 12
                 :  The Subtraction Of 10 And 2 Is : 8
                 :  The Multiplication Of 10 And 2 Is : 20
                 :  The Division Of 10 And 2 Is : 5

-->

<html>

<head>
    <title>Add, Subtract, Multiply, Divide Using FormHandling</title>
</head>

<body>

    <?php
    if (isset($_POST['submit'])) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $sum =  $number1 + $number2;
        echo "The Addition Of $number1 And $number2 Is : " . $sum . '<br />';
    }

    if (isset($_POST['submit'])) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $sub =  $number1 - $number2;
        echo "The Subtraction Of $number1 And $number2 Is : " . $sub . '<br />';
    }

    if (isset($_POST['submit'])) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $mult =  $number1 * $number2;
        echo "The Multiplication Of $number1 And $number2 Is : " . $mult . '<br />';
    }

    if (isset($_POST['submit'])) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $div =  $number1 / $number2;
        echo "The Division Of $number1 And $number2 Is : " . $div . '<br />';
    }
    ?>

    <form method="post">
        Add Number1: <br>
        <input type="number" name="number1" /><br><br>
        Add Number2: <br>
        <input type="number" name="number2" /><br><br>
        <input type="submit" name="submit" /><br><br>
    </form>

    <form method="post">
        Subtract Number1: <br>
        <input type="number" name="number1" /><br><br>
        Subtract Number2: <br>
        <input type="number" name="number2" /><br><br>
        <input type="submit" name="submit"><br><br>

    </form>

    <form method="post">
        Multiply Number1: <br>
        <input type="number" name="number1" /><br><br>
        Multiply Number2: <br>
        <input type="number" name="number2" /><br><br>
        <input type="submit" name="submit"><br><br>

    </form>

    <form method="post">
        Divide Number1: <br>
        <input type="number" name="number1" /><br><br>
        divide Number2: <br>
        <input type="number" name="number2" /><br><br>
        <input type="submit" name="submit"><br><br>

    </form>

</body>

</html>