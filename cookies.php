<!--

Function Name    :  Cookies In PHP
Function Date    :  29 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Cookie 'Client' is set!
                 :  Value is: Prasad Dangare

-->

<?php

$cookie_name = "Client";
$cookie_value = "Prasad Dangare";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day 

/*setcookie Method Is Used To Create As Well As Delete The Cookie There Are 6 Parameters 

1. Name -- It Is A Name Of Cookie
2. Value -- It Is The Value Store Inside Cookie
3. Expiry -- It Is The Time Span Of That Cookie
4. Path -- It Is An Directries To Which Our Cookie Is Accessible Generally We Specify '/'
5. Domain -- Use To Specify Domain Name To Which Our Cookie Is Accessible If Blank Then ItIs Accessible To All 
6. Security -- It Is Set To 1 If Cookie Should Be Transmitted Using Secure Protocol,
               That Is https It Is Sent To 0 Then  We Can Use Any Protocol Like http

*/

?>

<html>

<body>

    <?php

    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

</body>

</html>