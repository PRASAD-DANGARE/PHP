<!--

Function Name    :  Encapsulation In PHP
Function Date    :  30 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Inside  Fun

-->
Function Date : 29 Oct 2020
Function Author : Prasad Dangare
Output : Session Was Destroyed

-->

<?php

class prasad

{
    public $i; // property,characteristics

    public $j;

    function fun() // behaviour,method
    {
        echo ("Inside Fun");
    }
}

$obj = new prasad();

echo $obj->i;

$obj->fun(); // inside fun
