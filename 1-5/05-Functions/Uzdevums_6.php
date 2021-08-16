<?php
//Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string. +

// Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array.+

// Create a function that doubles the integer number.+

// Within the loop using php in-built function print out the double of the number value (using your custom function).
$array=[
    5,
    6,
    1,
    256.4,
    'Kaķis'
];

function skaitit($array)
{
    return count($array) ;
}
echo "Elements in Array is : " .	skaitit($array).PHP_EOL;

function doble($array)
{
    return count($array)*2;
}
echo "Double the integer number is : ".doble($array).PHP_EOL;

foreach ($array as $element) {
    if (is_numeric($element)) {
        $value = $element * 2;
        echo $element ." Double of the numbers value: ".$value.PHP_EOL;
    } else {
        echo var_export($element, true) . " is NOT number", PHP_EOL;
    }
}




