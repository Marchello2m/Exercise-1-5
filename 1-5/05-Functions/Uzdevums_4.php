<?php
//Create a array of objects that uses the function of exercise 3 but in loop printing out if the person has reached age of 18.
$john = new stdClass();
$john ->name ='John';
$john-> age = 20;

$jane= new stdClass();
$jane ->name ='Jane';
$jane-> age = 17;

$persons=[$john,$jane];


function isAdoult(stdClass $person):bool
{
  return $person->age >=18;
}
foreach ($persons as $person)
{
    if (isAdoult($person))
    {
        echo "{$person->name} is an adoult".PHP_EOL;
    }else {
        echo "{$person->name} is under age". PHP_EOL;
    }

}
