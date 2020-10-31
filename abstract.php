<!--

Function Name    :  Abstraction In PHP
Function Date    :  31 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Inside Gun
                 :  Inside Fun
                 :  Inside Hello Gun 

-->


<?php

abstract class Prasad
{
    public abstract function Fun();
    public function Gun()
    {
        echo ("Inside Gun");
    }
}

class Hello extends Prasad
{
    public function Fun()
    {
        echo ("Inside Fun");
    }

    public function Gun() // Override
    {
        echo ("Inside Hello Gun");
    }
}
