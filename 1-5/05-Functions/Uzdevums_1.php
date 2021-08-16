<?php
$a = "hello";
//Create a function that accepts any string and returns the same value with added "codelex" by the end of it. Print this value out.
function acept($a)
{
    return ($a .' '."codelex") ;
}
echo acept("Hello") . PHP_EOL;