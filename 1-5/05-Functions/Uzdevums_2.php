<?php
//Create a function that accepts 2 integer arguments.
// First argument is a base value and the second one is a value its been multiplied by.
// For example, given argument 10 and 5 prints out 50
function take2(int $a,int$b):int
{
    $a = 5;
   return $b * $a;
}
echo take2(0,4).PHP_EOL;