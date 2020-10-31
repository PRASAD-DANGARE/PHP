<!--

Function Name    :  To call A Protected Method-intro From Outside The Class In PHP 
Function Date    :  31 Oct 2020
Function Author  :  Prasad Dangare
Output           :  SUV OR SIDAAN ?
                 :  Lamborghini Is An SPORT CAR,
                 :  And The Color Is ORANGE.

-->

<?php

class Car
{

    public $name;
    public $color;
    public function __construct($name, $color)
    {

        $this->name = $name;
        $this->color = $color;
    }

    protected function intro()
    {
        echo "Lamborghini Is An  {$this->name}, <br> And The Color Is {$this->color}.";
    }
}

class Lamborghini extends Car
{
    public function message()
    {
        echo "SUV OR SIDAAN ? <br>";

        $this->intro();
    }
}

$Lamborghini = new Lamborghini("SPORT CAR", "ORANGE");
$Lamborghini->message();
