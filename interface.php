<!--

Function Name    :  Interface In PHP
Function Date    :  31 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Meow ,
                 :  Bark ,
                 :  quack

-->


<?php

// Interface definition

interface Animal
{
    public function makeSound();
}

// Class definitions

class Cat implements Animal
{
    public function makeSound()
    {
        echo " Meow , <br>";
    }
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo " Bark , <br>";
    }
}

class Duck implements Animal
{
    public function makeSound()
    {
        echo " quack ";
    }
}

// Create a list of animals

$cat = new Cat();
$dog = new Dog();
$mouse = new Duck();

$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound

foreach ($animals as $animal) {
    $animal->makeSound();
}
