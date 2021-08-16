<?php
//Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every persons personal data.
$john =new stdClass();
$john->name ='Ivars';
$john->surname ='Bēržiņš';
$john->age =24;
$john->birthday ='08-08-1992';

$jane =new stdClass();
$jane->name ='Ilze ';
$jane->surname ='Lapiņa';
$jane->age =24;
$jane->birthday ='08-08-1992';

$persons =[$john,$jane];

foreach($persons as $person)
{
    echo "{$person -> name}{$person->surname}({$person->age}/{$person->birthday})". PHP_EOL;
}