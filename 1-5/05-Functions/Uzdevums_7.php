<?php

$person = new stdClass();
$person->name = 'Jānis';
$person->licenses =['P'];
$person-> cash =1000;

$pistol= new stdClass();
$pistol -> name ='Glock';
$pistol -> price = 100;
$pistol -> license ='P';


$ak47= new stdClass();
$ak47 -> name ='AK_47';
$ak47 -> price = 200;
$ak47 -> license ='H';


$shotgun= new stdClass();
$shotgun -> name ='Shotgun';
$shotgun -> price = 150;
$shotgun -> license ='H';


$weapons=[$pistol,$ak47,$shotgun];

foreach ($weapons as $key=> $weapon)
{

    echo "{$key}|{$weapon->name} ({$weapon->price}$)[{$weapon->license}]" .PHP_EOL;
}
$selection=(int)readline('Enter selection: ');

if(!isset($weapons[$selection]))
{
    echo "Invalid selection.">PHP_EOL;
    exit;
}


$selectedWeapon =$weapons[$selection];

if(!in_array($selectedWeapon->license,$person->licenses)|| $person->cash <$selectedWeapon->price)
{
    echo "Person cannot purchase weapon {$selectedWeapon->name}".PHP_EOL;
    exit;
}
echo "Person can purchase {$selectedWeapon->name}".PHP_EOL;