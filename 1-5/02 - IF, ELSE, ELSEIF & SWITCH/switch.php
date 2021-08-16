<?php

$number =10;

switch ($number)
{
    case 5:
        echo "the number is 5";
        break;
        case 9:
        echo "the number is 9";
        break;
    case 11:
    case 12:
    case 13:
        echo "the number is between 11 - 13";
        break;
    default:
        echo "i dont know what number is";
        break;
}