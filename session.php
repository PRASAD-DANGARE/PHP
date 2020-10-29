<!--

Function Name    :  Session In PHP
Function Date    :  29 Oct 2020
Function Author  :  Prasad Dangare
Output           :  2

-->

<?php

session_start();

if (isset($_SESSION["counter"])) {
    $_SESSION["counter"] += 1;
} else {
    $_SESSION["counter"] == 1;
}
echo $_SESSION["counter"];
