<!--

Function Name    :  Session In PHP
Function Date    :  29 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Array ( [favcolor] => orange

-->

<?php

session_start();

?>

<!DOCTYPE html>

<html>

<body>

    <?php

    $_SESSION["favcolor"] = "orange";
    print_r($_SESSION);

    ?>

</body>

</html>