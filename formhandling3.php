<!--

Function Name    :  Form Handling Program To Fill Admission Form
Function Date    :  25 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Display All Given Fields And Fill The Form

-->

<html>

<head>

    <title>BMCC Admission Form</title>

</head>

<body>

    <?php

    if (
        isset($_POST["MR/MISS"]) || isset($_POST["FirstName"]) || isset($_POST["MiddleName"])

        || isset($_POST["LastName"]) || isset($_POST["Gender"]) || isset($_POST["Email"])

        || isset($_POST["DOB"]) || isset($_POST["Birthplace"]) || isset($_POST["Mobile"])

        || isset($_POST["Parentmobile"]) || isset($_POST["Mothertongue"]) || isset($_POST["Caste"])

        || isset($_POST["Nationality"]) || isset($_POST["Religion"])
    ) {

        echo "Hello  " . $_POST["MR/MISS"] . '<br /><br />';
        echo "Your Name is : " . $_POST["FirstName"];
        echo "_" . $_POST["MiddleName"];
        echo "_" . $_POST["LastName"] . '<br /><br />';
        echo "Gender is : " . $_POST["Gender"] . '<br /><br />';

        echo "Email-ID is : " . $_POST["Email"] . '<br /><br />';
        echo "Date Of Birth is : " . $_POST["DOB"] . '<br /><br />';
        echo "BirthPlace is : " . $_POST["Birthplace"] . '<br /><br />';

        echo "Mobile No_ " . $_POST["Mobile"] . '<br /><br />';
        echo "Parentmobile No _ " . $_POST["Parentmobile"] . '<br /><br />';

        echo "Mothertongue : " . $_POST["Mothertongue"] . '<br /><br />';
        echo "Caste Was : " . $_POST["Caste"] . '<br /><br />';

        echo "Nationality is : " . $_POST["Nationality"] . '<br /><br />';
        echo "Religion Are : " . $_POST["Religion"] . '<br /><br />';

        exit();
    }

    ?>

    <form action="<?php $_php_self ?>" method="POST">

        MR/MISS: <input type="text" Name="MR/MISS" />
        <p>FirstName: <input type="text" Name="FirstName" /></p>
        <p>MiddleName: <input type="text" Name="MiddleName" /></p>
        <p>LastName: <input type="text" Name="LastName" /></p>

        <p>Gender: <input type="text" Name="Gender" /></p>

        <p>Email: <input type="text" Name="Email" /></p>

        DOB: <input type="number" Name="DOB" /> <br><br>
        Birthplace: <input type="text" Name="Birthplace" /> <br><br>

        Mobile: <input type="number" Name="Mobile" /><br><br>
        Parentmobile: <input type="number" Name="Parentmobile" /><br><br>

        Mothertongue: <input type="text" Name="Mothertongue" /><br><br>
        Caste: <input type="text" Name="Caste" /><br><br>

        Nationality: <input type="text" Name="Nationality" /><br><br>
        Religion: <input type="text" Name="Religion" /><br><br>

        <input type="submit" />
        <input type="reset" type="reset" />
    </form>
</body>

</html>