<?php
require_once "data/Person.php";

$person1 = new Person();
$person1->name = "Ega Nanda";
$person1->address = "Lampung";
$person1->country = "Indonesia";


// var_dump($person1);

echo "Name : " . $person1->name . PHP_EOL;
echo "Address : " . $person1->address . PHP_EOL;
echo "Country : " . $person1->country . PHP_EOL;


$person2 = new Person();
$person2->name = null;
// $person2->address = "Tulang Bawang";
$person2->country = "Indonesia";


echo "Name : " . $person2->name . PHP_EOL;
echo "Address : " . $person2->address . PHP_EOL;
echo "Country : " . $person2->country . PHP_EOL;
