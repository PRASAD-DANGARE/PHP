<!--

Function Name    :  Form Handling To Find Area Of Triangle 
Function Date    :  28 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Base : 10
                 :  Height : 20
                 :  The Area Of Triangle : Base As 10 And Height As 20 Are : 100
-->
<html>

<head>
    <title>Area Of Triangle Using FormHandling</title>
</head>

<body>

    <?php
    if (isset($_POST['submit'])) {
        $Base = $_POST['Base'];
        $Height = $_POST['Height'];
        $Area = ($Base * $Height) / 2;
        echo "The Area Of Triangle : Base As $Base And Height As $Height Are : $Area";
    }
    ?>

    <form method="post">

        Base: <input type="number" name="Base"> <br><br>
        Height: <input type="number" name="Height"><br><br>

        <input type="submit" name="submit" value="Calculate">
    </form>

</body>

</html>