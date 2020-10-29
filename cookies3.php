<!--

Function Name    :  To Check If Cookie Are Enabled
Function Date    :  29 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Cookies Are Enabled.
                 :  Cookie 'Client' is set!
                 :  Value is: Prasad Dangare
                 :  Cookie 'Client' Is Deleted.

-->

<?php

$cookie_name = "Client";
$cookie_value = "Prasad Dangare";

setcookie("test_cookie", "test", time() + 3600, '/');

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

setcookie("Client", "", time() - 3600); // Delete A Cookie 3600 For 1 Hour


?>

<html>

<body>

    <?php

    if (count($_COOKIE) > 0) {
        echo "Cookies Are Enabled." . '<br><br>';
    } else {
        echo "Cookies Are Disabled." . '<br><br>';
    }

    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie Named '" . $cookie_name . "' Is Not Set!";
    } else {
        echo "Cookie '" . $cookie_name . "' Is Set!<br><br>";
        echo "Value Is: " . $_COOKIE[$cookie_name] . '<br><br>';
        echo "Cookie 'Client' Is Deleted." . '<br><br>';
    }

    ?>

</body>

</html>