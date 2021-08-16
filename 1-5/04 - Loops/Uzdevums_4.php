<?php
//Create a non associative array with integers and print out only integers that divides by 3 without any left.
$numbers =[3,4,6,7,8,9,12,27,30,42,36];

foreach ($numbers as $number)
{
    if($number % 3===0)
    {
        echo $number.PHP_EOL;
    }

}
