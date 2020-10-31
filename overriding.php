<!--

Function Name    :  Method Overriding In PHP
Function Date    :  31 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Parent
                 :  Child

-->

<?php

class Base
{
    function overriding()
    {
        echo "Parent . <br>";
    }
}

class Derived extends Base
{

    function overriding()
    {
        echo "\nChild";
    }
}

$p = new Base;

$c = new Derived;

$p->overriding();

$c->overriding();
