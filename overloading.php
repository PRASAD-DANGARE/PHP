<!--

Function Name    :  Method Overloading In PHP
Function Date    :  31 Oct 2020
Function Author  :  Prasad Dangare
Output           :  6.28
                 :  8

-->

<?php

class shape
{
    function __call($functionname, $arguments)
    {

        if ($functionname == 'area') {

            switch (count($arguments)) {


                    // area of circle 
                case 1:
                    return 3.14 * $arguments[0];

                    // IF two arguments then area is rectangel; 
                case 2:
                    return $arguments[0] * $arguments[1];
            }
        }
    }
}

$s = new Shape;

echo ($s->area(2)) . '<br>';

echo ($s->area(4, 2));
