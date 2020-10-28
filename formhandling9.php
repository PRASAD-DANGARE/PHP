<!--

Function Name    :  Form Handling To Check Whather A Given Year Is Leap Year Or Not
Function Date    :  28 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Enter The Number To Find Leap Year: 2020
                 :  2020 Is A Leap Year

-->

<html>

<head>
    <title>Find Leap Year Using FormHandling</title>
</head>


<body>

    <?php
    if ($_POST) {
        $year = $_POST['year'];

        if (!is_numeric($year)) {
            echo "Strings Not Allowed, Input Should Be A Number";
            return;
        }

        if ((0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400)) {
            echo "$year Is A Leap Year";
        } else {
            echo "$year Is Not A Leap Year";
        }
    }
    ?>

    <form method="post">
        Enter The Number To Find Leap Year: <input type="text" name="year"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>