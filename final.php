<!--

Function Name    :  Final Class In PHP
Function Date    :  31 Oct 2020
Function Author  :  Prasad Dangare
Output           :  error: Cannot override final method BaseClass::gun()

-->

<?php

class BaseClass
{
    public function fun()
    {
        echo "BaseClass::fun() called\n";
    }

    final public function gun()
    {
        echo "BaseClass::gun() called\n";
    }
}

class ChildClass extends BaseClass
{
    public function gun() //Fatal error: Cannot override final method BaseClass::gun()
    {
        echo "ChildClass::gun() called\n";
    }
}
