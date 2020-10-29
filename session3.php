<!--

Function Name    :  Destroy A Session In PHP
Function Date    :  29 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Session Was Destroyed

-->

<?php

session_start();

?>

<!DOCTYPE html>

<html>

<body>

    <?php

    session_unset();


    session_destroy();

    echo "Session Was Destroyed"
    ?>

</body>

</html>