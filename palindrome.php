<!--

Function Name    :  To Find Whether A Number Is Palindrome Or Not
Function Date    :  14 Oct 2020
Function Author  :  Prasad Dangare
Output           :  1235321 Is A Palindrome Number

-->


<?php

function palindrome($n)
{
    $number = $n;
    $sum = 0;
    while (floor($number)) {
        $rem = $number % 10;
        $sum = $sum * 10 + $rem;
        $number = $number / 10;
    }
    return $sum;
}

$input = 1235321;
$num = palindrome($input);
if ($input == $num) {
    echo "$input Is A Palindrome Number";
} else {
    echo "$input Is Not A Palindrome Number";
}
