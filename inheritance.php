<!--

Function Name    :  Inheritance In PHP
Function Date    :  31 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Its An Sidaan Or SUV ? .
                 :  RangeRover Vogue Is An SUV And The Color Is GRAY.

-->

<?php

class Car
{
    public $name;
    public $color;
    public function __construct($name, $color) // constructor
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "RangeRover Vogue Is An  {$this->name} And The Color Is {$this->color}.";
    }
}

// RangeRover Is Inherited From Car 

class RangeRover extends Car
{
    public function message()
    {
        echo "Its An Sidaan Or SUV ? . <br>";
    }
}
$RangeRover = new RangeRover("SUV", "GRAY");
$RangeRover->message();
$RangeRover->intro();
