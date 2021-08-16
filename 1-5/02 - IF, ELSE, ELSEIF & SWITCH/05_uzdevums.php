<?php
//Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
//Range should be stored within the 2 separated variables $y and $z.
$number = 50;
$x = 30;
$y = 60;
if($number >= $x && $number <=$y )
{
    echo "correct". PHP_EOL;
}