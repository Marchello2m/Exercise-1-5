<?php
//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg.


$apple = new stdClass();
$apple ->name ='Apple';
$apple-> weight = 300 ;

$orange = new stdClass();
$orange -> name ='Orange';
$orange -> weight = 2;



$fruits=[$apple,$orange];

$weight=[$orange -> weight,$apple-> weight];

function isMore(stdClass $fruits):bool
{
    return $fruits-> weight >=10;
}


foreach ($fruits as $fruit)
{
    if (isMore($fruit))
    {
        echo "{$fruit->name }  has weight over 10kg  ".PHP_EOL;
    }else {
        echo "{$fruit->name }  is under 10kg ". PHP_EOL;
    }

}


// Create a secondary array with shipping costs per weight.
// Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
// Using foreach loop print out the values of the fruits and how much it would cost to ship this product.


