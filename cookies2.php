<!--

Function Name    :  To Delete A Cookies In PHP
Function Date    :  29 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Cookie 'Client' is set!
                 :  Value is: Prasad Dangare
                 :  Cookie 'Client' Is Deleted.

-->

<?php

$cookie_name = "Client";
$cookie_value = "Prasad Dangare";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
setcookie("Client", "", time() - 3600); // Delete A Cookie 3600 For 1 Hour

?>

<html>

<body>

    <?php

    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie Named '" . $cookie_name . "' Is Not Set!";
    } else {
        echo "Cookie '" . $cookie_name . "' Is Set!<br><br>";
        echo "Value Is: " . $_COOKIE[$cookie_name] . '<br><br>';
        echo "Cookie 'Client' Is Deleted.";
    }
    ?>

</body>

</html>