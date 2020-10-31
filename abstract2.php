<!--

Function Name    :  Abstract In PHP
Function Date    :  31 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Best Car From Ford Manufacturing Is Endeavour!
                 :  Best Car From Rangerover Manufacturing Is Autobiography!
                 :  Best Car From Tesla Manufacturing Is Model S 

-->


<?php

// Parent class

abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro(): string;
}

// Child classes

class Ford extends Car
{
    public function intro(): string
    {
        return "Best Car From Ford Manufacturing Is  $this->name!";
    }
}

class Rangerover extends Car
{
    public function intro(): string
    {
        return "Best Car From Rangerover Manufacturing Is  $this->name!";
    }
}

class Tesla extends Car
{
    public function intro(): string
    {
        return "Best Car From Tesla Manufacturing Is $this->name!";
    }
}

// Create objects from the child classes

$Ford = new Ford("Endeavour");
echo $Ford->intro();
echo "<br>";

$Rangerover = new RangeRover("Autobiography");
echo $Rangerover->intro();
echo "<br>";

$Tesla = new Tesla("Model S");
echo $Tesla->intro();
