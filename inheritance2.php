<!--

Function Name    :  Overriding Inherited Methods In PHP
Function Date    :  31 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Endeavour Is An SUV,
                 :  The Color Is Black,
                 :  And It Is An 4WD

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

    public function intro()
    {
        echo "Endeavour Is An {$this->name} And The Color Is {$this->color}.";
    }
}

class Endeavour extends Car
{
    public $mode;
    public function __construct($name, $color, $mode)
    {
        $this->name = $name;
        $this->color = $color;
        $this->mode = $mode;
    }
    public function intro()
    {
        echo "Endeavour Is An {$this->name}, <br> The Color Is {$this->color}, <br >And It Is An {$this->mode}";
    }
}

$Endeavour = new Endeavour("SUV", "Black", "4WD");
$Endeavour->intro();
